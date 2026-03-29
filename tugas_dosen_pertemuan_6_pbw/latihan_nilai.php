<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai</title>

    <link rel="stylesheet" href="latihan_nilai.css" />
</head>

<body>


    <form method="post" action="">
        <h2>Form Input Nilai Mahasiswa</h2> <br>

        Nama: <input type="text" name="nama"><br><br>
        Nilai: <input type="number" name="nilai"><br><br>
        <input type="submit" value="Proses">

        <br>

        <?php

        if (!empty($_POST['nama']) && !empty($_POST['nilai'])) {

            echo "<br> <hr>";
            echo "Nama : " . htmlspecialchars($_POST['nama']) . "<br>";
            echo "Nilai : " . htmlspecialchars($_POST['nilai']) . "<br>";

            if ($_POST['nilai'] > 84 && $_POST['nilai'] <= 100) {
                echo "Predikat : A<br>";
            } elseif ($_POST['nilai'] > 74) {
                echo "Predikat : B<br>";
            } elseif ($_POST['nilai'] > 64) {
                echo "Predikat : C<br>";
            } elseif ($_POST['nilai'] > 49) {
                echo "Predikat : D<br>";
            } elseif ($_POST['nilai'] > 0) {
                echo "Predikat : E<br>";
            } else {
                echo "Predikat : Tidak valid<br>";
            }

            if ($_POST['nilai'] > 74) {
                echo "Status : Lulus";
            } else {
                echo "Status : Tidak Lulus";
            }
        } else {
            echo "<p>Nama dan Nilai tidak boleh kosong! </p>";
        }

        ?>
    </form>


</body>

</html>