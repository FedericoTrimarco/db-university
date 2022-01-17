<?php
    require_once __DIR__ . '/database.php';

    $sql = "SELECT *
            FROM `degrees`
            WHERE `department_id` = {$_GET['id']}"
        ;
    $results = $conn->query($sql);

    $degrees = [];

    if($results && $results->num_rows > 0){
        while($row = $results->fetch_assoc()){
            $degrees[] = $row;
        }
    } else{
        echo "ERROR";
    }

    $conn->close();