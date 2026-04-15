<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<br> <hr>";
    echo "Nama : " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <form action="" method="post">
        name :<input type="text" name="name" value="" required> <br><br>
        email :<input type="email" name="email" value="" required> <br><br>
        <input type="submit" value="prosses">
    </form>
</body>

</html>