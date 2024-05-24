<?php 
$id = $_GET["id"];

$host = "localhost";
$user = "root";
$pass = "root";
$db = "contact";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "DELETE FROM contact WHERE id = $id";
$conn->query($sql);
header("Location: /index.php");