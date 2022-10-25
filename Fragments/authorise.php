<?php

require_once('functions.php');

if(!isUserLoggedIn())
    redirect('Login.php');
