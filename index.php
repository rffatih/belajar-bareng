<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['password'])) {
    $dbUsername = "admin";
    $dbPassword = "admin";    

    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    
    if (
        $username == $dbUsername
        && $password == $dbPassword
    ) {
        header("location: beranda.html");
    } else {
        require "login.html";
    }


} else {
    require "login.html";
}