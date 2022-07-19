<?php
$servername = "localhost";
$username = "root";
$password = "dhruvik";
$database = "database1";
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];


$sql = "INSERT INTO table1 (name, email, phone, address) VALUES ('$name','$email','$number','$address')";
$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 else{
 echo "Connected successfully";
 }
if($conn->query($sql)===TRUE){
   echo "data inserted successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
