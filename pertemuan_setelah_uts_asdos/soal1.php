<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Soal 1</title>

   <link rel="stylesheet" href="style.css">
</head>

<body>
   <form action="" method="post">
      <center><h3>Form Soal 1</h3></center>
      <label for="roda">Masukan Jumlah roda :</label><br>
      <input type="number" name="roda" required placeholder="masukin roda nya berapa"><br><br>

      <button type="submit">Kirim</button>


      <?php
      if (isset($_POST['roda'])) {

         $roda = $_POST['roda'];

         switch ($roda) {
            case "2":

               echo "<br><br>" . "Motor";
               break;

            case "4":
               echo "<br><br>" . "Mobil";

            default:
               echo "<br><br>" . "Inputan Tidak Valid";
         }
      };
      ?>
   </form>
</body>

</html>