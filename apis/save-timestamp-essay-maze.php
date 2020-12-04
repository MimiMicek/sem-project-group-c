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
$answer1 = $_POST['answer1'] ?? '';
$answer2 = $_POST['answer2'] ?? '';
//answer3 = $_POST['answer3'] ?? '';

var_dump($pageName);
var_dump($dateTime);

try {
    global $dateTime;
    //Saving the timestamp
    $stmt = $db->prepare( 'INSERT INTO timestamps VALUES(null,:dateTime,:pageName)' );
    $stmt->bindValue(':dateTime', $dateTime );
    $stmt->bindValue(':pageName', $pageName );
    $stmt->execute();

    $stmt = $db->prepare( 'INSERT INTO essays VALUES(null,:answer1,:answer2)' );
    $stmt->bindValue(':answer1', $answer1 );
    $stmt->bindValue(':answer2', $answer2 );
    //$stmt->bindValue(':answer3', $answer3 );
    $stmt->execute();

    //Using rowcount() when INSERTing, UPDATEing or DELETEing
    if( $stmt->rowCount() == 0 ){
        echo 'Sorry, the timestamp was not saved!';
        exit;
    }

}catch( PDOEXception $ex ){
    echo $ex;
}

header("refresh:0;url=../finish.php");
sendResponse(1, __LINE__, "Saved!");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message":'.$sMessage.'}';
    exit;
}