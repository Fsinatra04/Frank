<?php
include "inputphp/koneksi.php";
$sql = "SELECT idpo FROM register";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/main.css">
        <title>Laporan PT. Bromelaine Enzyme</title>
    </head>
    <body>
        <!-- link pindah halaman-->
        <a href="maininput1.html">Halaman Utama</a>
        <h1>Input Production Planning</h1>
        <p>Halaman ini digunakan untuk input rencana produksi spraydryer</p>

        <!-- Form Input-->
        <form>
            <fieldset>
            <legend>Production Planning</legend>
            <br>
                ID PO:<br>
                <select id ="listidpo" onchange="myFunction()" >
                <option value="" disabled selected>--id--</option>
                <?php
                  if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()) {
                ?>
                  <option >
                  <?php echo $row["idpo"] ?>
                  </option>
                <?php
                   }
                }
                ?>
                </select><br>
                Nama Buyer:<br><br>
                Satuan Enzyme<br>
                <output type="text" name="satuanenzyme"><br>

                Quantity:<br>
                <output type="number" name="quantity"><br>
                Konversi:<br>
                <outnput type="number" name="konversi"><br>
                Tanggal Export<br>
                <output type="date" name="tanggalexport"><br>
                Tipe PO<br>
                <output type="date" name="tipepo"><br>

                Rencana Jumlah Produksi1:<br>
                <input type ="number" name="rencanajumlahproduksisd1"><br>
                Rencana Jadwal Produksi1:<br>
                <input type ="date" name="rencanajadwalproduksisd1"><br>

                Rencana Jumlah Produksi2:<br>
                <input type ="number" name="rencanajumlahproduksisd2"><br>
                Rencana Jadwal Produksi2:<br>
                <input type ="date" name="rencanajadwalproduksisd2"><br>

                Rencana Jumlah Produksi3:<br>
                <input type ="number" name="rencanajumlahproduksisd3"><br>
                Rencana Jadwal Produks3:<br>
                <input type ="date" name="rencanajadwalproduksisd3"><br>

                Rencana Jumlah Produksi4:<br>
                <input type ="number" name="rencanajumlahproduksisd4"><br>
                Rencana Jadwal Produksi4:<br>
                <input type ="date" name="rencanajadwalproduksisd4"><br>
                <input type="submit" value="SUBMIT">
            </fieldset>
        </form>
    </body>
</html>
