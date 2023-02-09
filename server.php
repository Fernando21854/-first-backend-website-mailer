<?php

$host="localhost";
$db="lab4";
$user="root";
$password="";


$mysqli = new mysqli(hostname: $host,
                     username: $user,
                     password: $password,
                     database: $db);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;



$db = new mysqli('locahost', 'username', 'password', 'messages');

$result = $db->query("SELECT * FROM messages WHERE time <= NOW()");

while ($message = $result->fetch_assoc()) {


mail($message['email'], 'Scheduled Message', $message['message']);

// delete the message from the database
$db->query("DELETE FROM messages WHERE id = {$message['userid']}");
}

if (isset($_POST['submit'])) {
   
    $email = $db->real_escape_string($_POST['email']);
    $message = $db->real_escape_string($_POST['message']);
    $time = $db->real_escape_string($_POST['time']);
    
  
   
    $db->query("INSERT INTO messages (email, timestamp, message) VALUES ('$email', '$timestamp', '$message')");
  
    
    
  }
  if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>
