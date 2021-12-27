<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
}
    require 'function.php';

    $tiket = query("SELECT * FROM tiket");

?>
    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Penjualan Tiket</title>
  </head>
  <body>

  <br>
  
      <center><h1 class="mt-3">Jadwal Penjualan Tiket</h1></center>
    
        <div class="container-fluid">
            <a class="btn btn-primary" href="tambah.php">Tambah Jadwal Tiket</a> | 
            <a class="btn btn-danger "href="cetak.php" target="_blank">Cetak Laporan Pdf</a> | 
            <a class="btn btn-success "href="cetak_excel.php" target="_blank">Cetak Laporan Excel</a>
        </div>
        
        <br><br>
        <div class="container-fluid">
                <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>ASAL</th>
                    <th>TUJUAN</th>
                    <th>TANGGAL</th>
                    <th>JADWAL</th>
                    <th>HARGA</th>
                    <th>SEAT</th>
                    <th>JAM KEBERANGKATAN</th>
                    <th>AKSI</th>
                </tr>
                    <?php $i = 1;?>
                    <?php foreach($tiket as $tkt):?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $tkt['asal'];?></td>
                            <td><?= $tkt['tujuan']; ?></td>
                            <td><?= $tkt['tanggal']; ?></td>
                            <td><?= $tkt['jadwal']; ?></td>
                            <td><?= $tkt['harga']; ?></td>
                            <td><?= $tkt['seat']; ?></td>
                            <td><?= $tkt['j_keberangkatan'] ?></td>
                            <td>
                                <a class="btn btn-warning"href="ubah.php?id=<?= $tkt["id_tiket"]?>">Ubah</a>
                                <a class="btn btn-danger"href="hapus.php?id=<?= $tkt["id_tiket"]?>">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>   
            </table>
        </div>
    
    <div class="container-fluid"><a class="btn btn-primary" href="logout.php">Logout</a></div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>