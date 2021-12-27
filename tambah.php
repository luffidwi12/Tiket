<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
}

require 'function.php';


    if(isset($_POST['submit'])){

        if(tambah($_POST) > 0){
            echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php'
            </script>";
        }else{
            echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php'
            </script>";
        }
    }

    $kot = query("SELECT * FROM kota");
?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Jadwal Tiket</title>
  </head>
  <body>
    <h1>Tambah Jadwal Tiket</h1>

    <div class="container-fluid">
	<form method="post" action="">

    <div class="form-group">
			<label>Asal</label>
			<select name="asal" id="asal" class="form-control">
				<option value="">--Pilih Kota Asal--</option>
				<?php foreach($kot as $ko) :?>
					<option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

        <div class="form-group">
			<label>Tujuan</label>
			<select name="tujuan" id="tujuan" class="form-control">
				<option value="">--Pilih Kota Tujuan--</option>
				<?php foreach($kot as $ko) :?>
					<option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

        <div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" placeholder="tanggal" class="form-control">
		</div>

        <div class="form-group">
			<label>Jadwal</label>
			<input type="date" name="jadwal" placeholder="jadwal" class="form-control">
		</div>

        <div class="form-group">
			<label>Harga</label>
			<input type="text" name="harga" placeholder="harga" class="form-control">
		</div>

        <div class="form-group">
			<label>Seat</label>
			<input type="text" name="seat" placeholder="seat" class="form-control">
		</div>

        <div class="form-group">
			<label>Jam Keberangkatan</label>
			<input type="time" name="j_keberangkatan" placeholder="j_keberangkatan" class="form-control">
		</div>
            <br>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
        
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