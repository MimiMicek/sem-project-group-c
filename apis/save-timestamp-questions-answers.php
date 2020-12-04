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
$answer3 = $_POST['answer3'] ?? '';
$answer4 = $_POST['answer4'] ?? '';
$answer5 = $_POST['answer5'] ?? '';
$answer6 = $_POST['answer6'] ?? '';
$answer7 = $_POST['answer7'] ?? '';

try {
    global $dateTime;
    //Saving the timestamp
    $stmt = $db->prepare( 'INSERT INTO timestamps VALUES(null,:dateTime,:pageName)' );
    $stmt->bindValue(':dateTime', $dateTime );
    $stmt->bindValue(':pageName', $pageName );
    $stmt->execute();

    $stmt = $db->prepare( 'INSERT INTO answers VALUES(null,:answer1,:answer2,:answer3,:answer4,:answer5,:answer6,:answer7)' );
    $stmt->bindValue(':answer1', $answer1 );
    $stmt->bindValue(':answer2', $answer2 );
    $stmt->bindValue(':answer3', $answer3 );
    $stmt->bindValue(':answer4', $answer4 );
    $stmt->bindValue(':answer5', $answer5 );
    $stmt->bindValue(':answer6', $answer6 );
    $stmt->bindValue(':answer7', $answer7 );

    $stmt->execute();

    //Using rowcount() when INSERTing, UPDATEing or DELETEing
    if( $stmt->rowCount() == 0 ){
        echo 'Sorry, the account was not saved!';
        exit;
    }

}catch( PDOEXception $ex ){
    echo $ex;
}

header("refresh:0;url=../write-essay-solve-maze.php");
sendResponse(1, __LINE__, "Saved!");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message":'.$sMessage.'}';
    exit;
}