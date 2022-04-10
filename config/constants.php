<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    // define('SITEURL', 'http://localhost:8012/onlinefood-order/');
    define('SITEURL', 'http://localhost:8012/ebenskitchen/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    // define('DB_NAME', 'onlinefoodorder');
    define('DB_NAME', 'EbensKitchen');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>