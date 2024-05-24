<?php 

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone = $_POST["phone"];

$host = "localhost";
$user = "root";
$pass = "root";
$db = "contact";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "INSERT INTO contact(first_name, last_name, phone) 
                VALUES('$first_name','$last_name','$phone')";
$conn->query($sql);
header("Location: /index.php");