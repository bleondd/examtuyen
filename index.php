<?php
require_once("product.php");
$show_contact = show_contact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php include_once("styles.php");?>
</head>
<body>
    <header>
    </header>
    <main class="main">
        <div class="container">
            <h2>Contact</h2>
            <a href="new_contact.php">Add new contact</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
               <tbody>
               <?php foreach ($show_contact as $item):?> 
                    <tr>
                        <th scope="row"><?php echo $item["id"];?></th>
                        <td><?php echo $item["first_name"];?></td>
                        <td><?php echo $item["last_name"];?></td>
                        <td><?php echo $item["phone"];?></td>
                        <td><a href="/edit_contact.php?id=<?php echo $item["id"]; ?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure delete contact?')" 
                        class="text-danger" href="/delete_contact.php?id=<?php echo $item["id"]; ?>">
                        Delete</a></td>
                    </tr>
                <?php endforeach;?>
               </tbody>
            </table>
    </main>
</body>
</html>