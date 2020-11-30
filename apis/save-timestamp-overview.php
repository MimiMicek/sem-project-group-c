<?php

require_once __DIR__.'/../db-connect.php';

ini_set('display_errors', 0);

if(isset($_POST['timestamp']))
{
    $timestamp = time();
    date_default_timezone_set("Europe/Copenhagen");
    $dateTime = date('d/m/Y h:i:s', $timestamp);
    //echo $dateTime;
}

$pageName = $_POST['pageName'] ?? '';

try {
    global $dateTime;
     //Saving the timestamp
    $stmt = $db->prepare( 'INSERT INTO timestamps VALUES(null,:dateTime,:pageName)' );
    $stmt->bindValue(':dateTime', $dateTime );
    $stmt->bindValue(':pageName', $pageName );
    $stmt->execute();

    //Using rowcount() when INSERTing, UPDATEing or DELETEing
    if( $stmt->rowCount() == 0 ){
        echo 'Sorry, the timestamp was not saved!';
        exit;
    }

}catch( PDOEXception $ex ){
    echo $ex;
}

header("refresh:0;url=../listening.php");
sendResponse(1, __LINE__, "Saved!");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message":'.$sMessage.'}';
    exit;
}