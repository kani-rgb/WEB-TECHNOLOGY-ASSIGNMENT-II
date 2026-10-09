<?php
// Update these values for your local MySQL installation.
$host='localhost'; $user='root'; $pass=''; $db='student_portal';
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){die('Database connection failed: '.htmlspecialchars($conn->connect_error));}
$conn->set_charset('utf8mb4');
?>
