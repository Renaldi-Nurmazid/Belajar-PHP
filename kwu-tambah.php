<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang">KODE BARANG : </label>
    <input type="number" name="kodebarang" placeholder="EX. 123456789" /><br>

    <label for="tanggal">TANGGAL :</label>
    <input type="date" name="tanggal" /><br>


    <label for="pembeli">PEMBELI :</label>
    <input type="text" name="pembeli" placeholder=" Ex . DAVID LUTPI" /><br>


    <label for="namabarang">NAMA BARANG :</label>
    <input type="text" name="namabarang" placeholder=" BENGBENG " /><br>

    <label for="qty">QTY :</label>
    <input type="number" name="qty" placeholder=" Rp 180000 " /><br>
    
    <label for="hargabeli">HARGA BELI :</label>
    <input type="number" name="hargabeli" placeholder=" Rp 180000 " /><br>
    
    <label for="hargajual">HARGA JUAL :</label>
    <input type="number" name="hargajual" placeholder="Rp 180000 " /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <input type="reset" name="reset" value="Reset Input" />
    <a href="kwu.php">Kembali</a>
</form>
<?php
if(isset($_POST["simpan"]))
{
//deklarasi Variabel
 $kodebarang = $_POST["kodebarang"];
 $tanggal = $_POST["tanggal"];
 $pembeli = $_POST["pembeli"];
 $namabarang = $_POST["namabarang"];
 $qty = $_POST["qty"];
 $hargabeli = $_POST["hargabeli"];
 $hargajual = $_POST["hargajual"];
 //CREATE -Menambahkan Data ke Database
 $query = "
 INSERT INTO transaksi VALUES 
 ('$kodebarang','$tanggal','$pembeli','$namabarang','$qty','$hargabeli','$hargajual');";

 include ('./kwu_config.php');
 $insert = mysqli_query($mysqli, $query);

 if ($insert)
 {
    echo"
    <script>
         alert('Data berhasil ditambahkan');
         window.location='kwu.php';
    </script>";
 }
}
?>