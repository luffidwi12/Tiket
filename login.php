<?php
session_start();


if(isset($_SESSION["login"])){
    header("Location: index.php");
}

require 'function.php';

if(isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result)===1){

		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){

        //set session
        $_SESSION["login"] = true;

			header("Location: index.php");
			exit;
		}

	}

    $error = true;
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

    <title>Halaman Login</title>
        <?php if(isset($error)): ?>
        <p style="color:red; font-style: italic;">Username / Password Salah</p>
        <?php endif; ?>
  </head>
  <body>

      <center><h1 class="mt-3">Login</h1></center>
    
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

        <!-- <div class="form-group">
			<input type="checkbox" name="remember" id="remember">
            <label>Remember Me</label>
		</div> -->
        
        <br>
         <button type="submit" name="login" class="btn btn-primary">Login</button> | <a class="btn btn-warning" href="registrasi.php">Registrasi?</a>
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