<?php 
	header("Content-type:application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Jadwal Tiket.xls");

    require 'function.php';

    $tiket = query("SELECT * FROM tiket");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Penjualan Tiket</title>
  </head>
  <body>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>ASAL</th>
            <th>TUJUAN</th>
            <th>TANGGAL</th>
            <th>JADWAL</th>
            <th>HARGA</th>
            <th>SEAT</th>
            <th>JAM KEBERANGKATAN</th>
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
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>   
    </table>
  </body>
</html>