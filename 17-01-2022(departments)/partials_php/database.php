<?php
    //setup
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'university');

    //connessione
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //check
    if($conn->connect_error){
        die('connession non riuscita!');
    }