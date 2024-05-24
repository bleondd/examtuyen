<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new contact</title>
    <?php include_once("styles.php");?>
</head>
<body>
    <header>
    </header>
    <main class="main">
        <div class="container">
            <h1>ADD NEW CONTACT</h1>
        <form action="/save_contact.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name:</label>
                <input name="first_name" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last Name:</label>
                <input name="last_name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number:</label>
                <input name="phone" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>