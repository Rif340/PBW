<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal3</title>
    
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'menu.php'; ?>

    <form action="" method="post">
        <center><h3>Form Soal 3</h3></center>
        <label for="">Masukan Hewan 1 :</label><br>
        <input type="text" name="hewan[]" value="" required><br><br>

        <label for="">Masukan Hewan 2 :</label><br>
        <input type="text" name="hewan[]" value="" required><br><br>

        <label for="">Masukan Hewan 3 :</label><br>
        <input type="text" name="hewan[]" value="" required><br><br>

        <label for="">Masukan Hewan 4 :</label><br>
        <input type="text" name="hewan[]" value="" required><br><br>

        <label for="">Masukan Hewan 5 :</label><br>
        <input type="text" name="hewan[]" value="" required><br><br>

        <button type="submit">Kirim</button><br><br>

        <?php
        
        if (isset($_POST['hewan'])) {
            echo "Nama Hewan :" ;
            
            foreach ($_POST['hewan'] as $item) {
                echo " " . $item ;
            }
        } else {
            echo "<p>Tidak ada barang dipilih</p>";
        }
        ?>
    </form>

</body>

</html>