<?php

    $dbhost['db_host'] = 'localhost';
    $dbhost['db_user'] = 'root';
    $dbhost['db_pass'] = 'root';
    $dbhost['db_name'] = 'cms';

    foreach($dbhost as $key => $value){
        define(strtoupper($key), $value);
    }

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // if($connection){
    //     echo 'connected';
    // }

?>