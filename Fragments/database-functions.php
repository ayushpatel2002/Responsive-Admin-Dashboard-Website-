<?php
// The user registration functions used throughout this file were done with help from code archive of Lab 9, activity 3
// Constants.
const SERVER_NAME = 'rmit.australiaeast.cloudapp.azure.com';
const DB_NAME = 's3891013_a2';
const USERNAME = 's3891013_a2';
const PASSWORD = 'abc123';

const DSN = 'mysql:host=' . SERVER_NAME . ';dbname=' . DB_NAME;

// --- Utils ----------------------------------------------------------------------------------
function createConnection() {
    return new PDO(DSN, USERNAME, PASSWORD);
}

function prepareAndExecute($query, $params = null) {
    $pdo = createConnection();
    $statement = $pdo->prepare($query);
    $statement->execute($params);

    return $statement;
}

function prepareExecuteAndFetchAll($query, $params = null) {
    $statement = prepareAndExecute($query, $params);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function prepareExecuteAndFetch($query, $params = null) {
    $statement = prepareAndExecute($query, $params);

    return $statement->fetch(PDO::FETCH_ASSOC);
}

// --- User -----------------------------------------------------------------------------------
function getUsers() {
    return prepareExecuteAndFetchAll('select * from user');
}

function getUser($email) {
    return prepareExecuteAndFetch('select * from user where email = :email', ['email' => $email]);
}

function insertUser($user) {
    return prepareAndExecute(
        'insert into user
        (email, password, first_name, last_name, phone, age, is_student, is_employed) values
        (:email, :password, :firstname, :lastname, :phone, :age, :student_status, :emp_status)', $user);
}

// --- Services -------------------------------------------------------------------------------
function getServices() {
    return prepareExecuteAndFetchAll('select * from service');
}

function getService($id) {
    return prepareExecuteAndFetch('select * from service where service_id = :id', ['id' => $id]);
}

function getServiceInstructions($id) {
    return prepareExecuteAndFetchAll('select * from service_instruction where service_id = :id', ['id' => $id]);
}

function getServiceInstruction($id, $type) {
    return prepareExecuteAndFetch(
        'select * from service_instruction where service_id = :id and service_type = :type',
        ['id' => $id, 'type' => $type]);
}

function insertActivity($activity) {
    return prepareAndExecute(
        'insert into user_service
        (email, service_id, service_type, date_performed, duration_minutes) values
        (:email, :service_id, :service_type, now(), :duration_minutes)', $activity);
}
// The following 3 functions are created to fetch the meal items with required meal type and B, L and D represents breakfast, lunch, dinner respectively
function getMealsWithTypeB($type){
    return prepareExecuteAndFetchAll('select * from meal where type = :type and time = "breakfast" ', ['type' => $type]);
}

function getMealsWithTypeL($type){
    return prepareExecuteAndFetchAll('select * from meal where type = :type and time = "lunch" ', ['type' => $type]);
}

function getMealsWithTypeD($type){
    return prepareExecuteAndFetchAll('select * from meal where type = :type and time = "dinner" ', ['type' => $type]);
}
// Insertmeals to insert meal items into database
function insertMeals($email, $mealID, $servings){
    return prepareAndExecute('insert into user_meal values (:email, :meal_id, :servings)', ['email'=> $email, 'meal_id' => $mealID, 'servings' => $servings]);
}

function getActivityOfUsers($name =  null) {
    if(empty($name))
        return prepareExecuteAndFetchAll('select * from user');

    return prepareExecuteAndFetchAll(
        'select * from service where name like concat(\'%\', :name, \'%\')', ['name' => $name]);
}
