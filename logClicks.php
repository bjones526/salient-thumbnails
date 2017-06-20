  <?php

$eventType = $_POST["eventType"];
$objectType = $_POST["objectType"];
$objectValue = $_POST["objectValue"];
$objectID = $_POST["objectID"];
$timestamp = $_POST["timestamp"];
$comment = $_POST["comment"];
$session_id = 1013
;

require "connect.php";


$query = "insert into log(eventType, objectType, objectValue, objectID, comment, timestamp, participant_id) values(?, ?, ?, ?, ?, ?, $session_id)";
	if ($stmt = mysqli_prepare($db, $query)) { 
		mysqli_stmt_bind_param($stmt,'sssssi', $eventType, $objectType, $objectValue, $objectID, $comment, $timestamp);
			mysqli_stmt_execute($stmt);
	}

?>