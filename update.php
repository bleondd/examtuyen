<?php 
$id = $_GET["id"];

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
$sql = "UPDATE contact set first_name='$first_name', last_name= '$last_name', phone='$phone'  WHERE id = $id";
$conn->query($sql);
header("Location: /index.php");