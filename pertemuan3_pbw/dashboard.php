<?php
$foto_profile = $_FILES['foto_profile']['name'];
$tmp = $_FILES['foto_profile']['tmp_name'];

move_uploaded_file($tmp, "images/" . $foto_profile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Codenya</title>
</head>

<body>
    <center>
        <h3>Hasil nya disini</h3>
    </center>

    <table style="width:100%" border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Kota Asal</th>
            <th>Foto Profile</th>
        </tr>
        <tr>
            
            <td><?php echo $_POST["nama"]; ?></td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["jenis_kelamin"]; ?></td>
            <td><?php
                foreach ($_POST["hobi"] as $h) {
                    echo $h . " ";
                }
                ?>
            </td>
            <td><?php echo $_POST["pilih_kota"]; ?></td>
            <td><img src="images/<?php echo $foto_profile; ?>" width="120"></td>
        </tr>
    </table>
</body>

</html>