<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'menu.php'; ?>

    <form action="" method="post">
        <center><h3>Form Soal 2</h3></center>
        <label for="angka1">Masukan Angka :</label><br>
        <input type="text" id="angka1" name="angka"><br><br>

        <button type="submit">krim</button>

        <?php

        if (isset($_POST['angka'])) {

            $angka = $_POST['angka'];

            for ($i = $angka; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo "<br><br>" . $i;
                }
            }
        }
        ?>
    </form>

</body>

</html>