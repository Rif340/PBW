<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umur KTP</title>
</head>
<body>

<form method="post" action="">
    email: <input type="email" name="email" required><br><br>

    <p>Sudah punya KTP atau belum?</p>

    <label for="sudah">Sudah</label>
    <input type="radio" name="ktp" id="sudah" value="sudah" required><br><br>

    <label for="belum">Belum</label>
    <input type="radio" name="ktp" id="belum" value="belum"><br><br>

    <input type="submit" value="Proses">

    <br><br>

    <?php
    if (isset($_POST['email']) && isset($_POST['ktp'])) {
        $email = htmlspecialchars($_POST['email']);
        $ktp = $_POST['ktp'];

        

        if ($ktp == "sudah") {
            echo "Anda boleh mendaftar";
        } else {
            echo "Anda tidak boleh mendaftar";
        }
    }
    ?>
</form>

</body>
</html>