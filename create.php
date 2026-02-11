<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="create.css">
    <title>Insert To Database</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="create">

        <label for="">Username</label> 
        <input id="username" type="text" name="username"><br>
    
        <labe>Password</labe>
        <input id="password" type="text" name="password"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>