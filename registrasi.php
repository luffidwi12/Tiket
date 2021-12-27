<?php 
require 'function.php';

if(isset($_POST["register"])){

	if(registrasi($_POST) > 0){
		echo "<script>
			alert('User Baru Berhasil Ditambahkan!');

			</script>";
	}else{
		echo mysqli_error($conn);
	}
}

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Registrasi</title>
  </head>
  <body>

      <center><h1 class="mt-3">Registrasi</h1></center>
    
      <div class="container-fluid">
	    <form method="post" action="">

      <div class="form-group">
			<label>Username</label>
			<input type="text" name="username" id="username"  class="form-control">
		</div>

        <div class="form-group">
			<label>Password</label>
			<input type="password" name="password" id="password"  class="form-control">
		</div>

        <div class="form-group">
			<label>Konfirmasi Password</label>
			<input type="password" name="password2" id="password2"  class="form-control">
		</div>
        <br>
         <button type="submit" name="register" class="btn btn-primary">Register</button> | <a class="btn btn-warning "href="login.php">Login</a>
    </form>
    
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