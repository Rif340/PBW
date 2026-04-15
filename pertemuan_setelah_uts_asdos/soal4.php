<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal4</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="post">
        <center><h3>Form Soal 4</h3></center>
        <label for="angka">Masukan Angka :</label><br>
        <input type="number" name="angka" required id="angka"><br><br>

        <button type="submit">kirim</button>

        <?php
        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
            $cek_angka = ($angka % 2 == 0) ? "Ganjil" : "Genap";

            echo "<br> <br> Angka " . $angka . " Tersebut Adalah :"  . $cek_angka;
        }
        ?>
    </form>
</body>

</html>