<?php
$username = "service_ac";
$password = "P@ssw0rd";
$database = "neflibata";
 
$mysqli = new mysqli("rm-gs54q0r13q990dkg521520.mysql.singapore.rds.aliyuncs.com", $username, $password, $database);
 
$field1 = $mysqli->real_escape_string($_POST['userName']);
$field2 = $mysqli->real_escape_string($_POST['note']);

$query = "INSERT INTO note (userName, note)
            VALUES ('{$field1}','{$field2}')";
 
$mysqli->query($query);
$mysqli->close();
header("Location: /note.php");
exit();
