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

    $sql = "SELECT * FROM contact WHERE id= $id";
    $result = $conn->query($sql);
    $contact = null;
    while($row = $result->fetch_assoc()){
        $contact = $row;
    }
    if($contact == null){
        header("Location: /404_notfound.php");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <?php include_once("styles.php");?>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
    <form action="/update_contact.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name:</label>
            <input value="<?php echo $contact["first_name"]; ?>"  name="first_name" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last Name:</label>
            <input value="<?php echo $contact["last_name"]; ?>"  name="last_name" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number:</label>
            <input value="<?php echo $contact["phone"]; ?>"  name="phone" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>