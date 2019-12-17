<?php
      include "koneksi.php";
      $idpo = $_REQUEST['idpo'];
      $namabuyer  = $_REQUEST['namabuyer'];
      $satuanenzyme  = $_REQUEST['satuanenzyme'];
      $quantity  = $_REQUEST['quantity'];
      $konversi  = $_REQUEST['konversi'];
      $tanggalexport  = $_REQUEST['tanggalexport'];
      $tipepo  = $_REQUEST['tipepo'];

      $mysqli  = "INSERT INTO register (idpo, namabuyer, satuanenzyme, quantity, konversi, tanggalexport, tipepo)
      VALUES ('$idpo', '$namabuyer', '$satuanenzyme', '$quantity', '$konversi', '$tanggalexport', '$tipepo')";
      $result  = mysqli_query($conn, $mysqli);
      if ($result) {
        echo "Input berhasil";
      } else {
        echo "Input gagal";
      }
      mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <br>
  <a href="/maininput1.html">Halaman Utama</a>
  </body>
</html>
