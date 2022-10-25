<?php
// The user registration functions used throughout this file were done with help from code archive of Lab 9, activity 3
// The functions used for myServices were done with help of code archive from Lab 10, activity 2
require_once('Fragments/database-functions.php');

function trimArray(&$array, $exclude = []) {
    foreach($array as $key => &$value) {
        if(is_string($value) && !in_array($key, $exclude))
            $value = trim($value);
    }
}
// Constants.
const USER_SESSION_KEY = 'user';

// Always call session_start.
session_start();

// --- Utils ----------------------------------------------------------------------------------
function displayError($errors, $name) {
    if(isset($errors[$name]))
        echo "<div style='color: red; display: inline-block;'>{$errors[$name]}</div>";
}

function displayValue($form, $name) {
    if(isset($form[$name]))
        echo 'value="' . htmlspecialchars($form[$name]) . '"';
}

function displayChecked($form, $name, $value) {
    if(isset($form[$name]) && $form[$name] === $value)
        echo 'checked';
}

function redirect($location) {
    header("Location: $location");
    exit();
}

// --- User -----------------------------------------------------------------------------------
function isUserLoggedIn() {
    return isset($_SESSION[USER_SESSION_KEY]);
}

function getLoggedInUser() {
    return isUserLoggedIn() ? $_SESSION[USER_SESSION_KEY] : null;
}
$pPattern = "((^[A-Z]).*[-_].*[0-9]$).{0,8}";

function loginUser($form) {
    $errors = [];

    $key = 'email';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
        $errors[$key] = ' Email is invalid.';

    $key = 'password';
    if(!isset($form[$key]) || strlen($form[$key]) < 6)
        $errors[$key] = 'Password is required and must contain at least 6 characters.';
    

    if(count($errors) === 0) {
        $user = getUser($form['email']);

        if($user !== false && $form['password'] === $user['password'])
            // Set session variable to login user.
            $_SESSION[USER_SESSION_KEY] = $user;
        else
            $errors[$key] = 'Login failed, email and / or password incorrect. Please try again.';
    }

    return $errors;
}

function logoutUser() {
    // Unset all session variables.
    session_unset();
}

function registerUser($form) {
    $errors = [];

    $key = 'firstname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'First name is required.';

    $key = 'lastname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'Last name is required.';

    $key = 'email';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
        $errors[$key] = 'Email is invalid.';
    else if(getUser($form[$key]) !== false)
        $errors[$key] = 'Email is already registered.';

    $key = 'phone';
    if(!isset($form[$key]) || preg_match('/^\+61 4\d{2} \d{3} \d{3}$/', $form[$key]) !== 1)
        $errors[$key] = 'Phone number is invalid. Must be in the format: +61 4xx xxx xxx';

    $key = 'age';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 16, 'max_range' => 120]]) === false)
        $errors[$key] = 'Minimum age is 16.';

    $key = 'student_status';
    if(!isset($form[$key]) || preg_match('/^true|false$/', $form[$key]) !== 1)
        $errors[$key] = 'Must select student status.';

    $key = 'emp_status';
    if(!isset($form[$key]) || preg_match('/^true|false$/', $form[$key]) !== 1)
        $errors[$key] = 'Must select employment status.';
    
    $key = 'password';
    if(!isset($form[$key]) || strlen($form[$key]) < 6)
        $errors[$key] = 'Password is required and must contain at least 6 characters.';

    $key = 'password';
    if(!isset($form[$key]) || !preg_match("/^[A-Z](?=.*[!@#$%^&*-])(?=.*[0-9]).{8,}$/", $form[$key]))
        $errors[$key] = "Password must start with capital alphabets, have a number and a special character" ;
    
    $key = 'confirmPassword';
    if(isset($form['password']) && (!isset($form[$key]) || $form['password'] !== $form[$key]))
        $errors[$key] = 'Passwords do not match.';

    if(count($errors) === 0) {
        // Add user.
        $user = [
            'firstname' => htmlspecialchars(trim($form['firstname'])),
            'lastname' => htmlspecialchars(trim($form['lastname'])),
            'email' => trim($form['email']),
            'phone' => htmlspecialchars(trim($form['phone'])),
            'age' => filter_var($form['age'], FILTER_VALIDATE_INT),
            'student_status' => (int) filter_var($form['student_status'], FILTER_VALIDATE_BOOLEAN),
            'emp_status' => (int) filter_var($form['emp_status'], FILTER_VALIDATE_BOOLEAN),
            'password' => $form['password']
        ];

        // Insert user.
        insertUser($user);

        // Auto-login the registered user.
        loginUser([
            'email' => $user['email'],
            'password' => $form['password']
        ]);
    }

    return $errors;
}
// for the services part 
function recordActivity($email, $serviceID, $form) {
    $errors = [];

    $key = 'duration';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1, 'max_range' => 480]]) === false)
        $errors[$key] = 'Duration must be a whole number and not be less than 1 or greater than 480.';
    
    if(count($errors) === 0) {
        // Prepare activity data.
        $activity = [
            'email' => $email,
            'service_id' => $serviceID,
            'service_type' => $form['type'],
            'duration_minutes' => filter_var($form['duration'], FILTER_VALIDATE_INT)
        ];

        // Insert activity into database.
        insertActivity($activity);
    }
    return $errors;
}

function checkMealAttributes($form){
    $errors = [];
    $key = 'type';
    if(!isset($form[$key])){
        $errors[$key] = 'Please select the the type of meal';
    }

    $key = 'calories';
    if(!isset($form[$key]) || $form[$key] <= 1000){
        $errors[$key] = 'The calories should be greater than 1000';
    }

    return $errors;
}
// The following function has been created with help of php.net(https://www.php.net/manual/en/function.shuffle.php) to randomise the array items for the meal planner
function shuffleItems($list) {
    if (!is_array($list)) return $list;
    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key)
      $random[$key] = $list[$key];
  
    return $random;
  }