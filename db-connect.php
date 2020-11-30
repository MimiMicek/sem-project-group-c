<?php

try{

    $sUserName = 'root';
    $sPassword = '';
    $sConnection = "mysql:host=localhost; dbname=sem_project; charset=utf8mb4";

    $aOptions = array(
        //PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //comment out when doing a transaction
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

    );

    $db = new PDO( $sConnection, $sUserName, $sPassword, $aOptions );

    //echo '{"status":1,"message":"Connected to database"}';

}catch( PDOException $e){
    echo $e;
    echo '{"status":0,"message":"cannot connect to database"}';
    exit();
}
?>
