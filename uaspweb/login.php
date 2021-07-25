<?php
require 'function.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    }else{
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

}else{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="web.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>SELAMAT DATANG DIHALAMAN LOGIN</h1>

	<div class="card">
		<div id="card-content">
			<div id="card-title">
			<h2>LOGIN</h2>
		<div class="underline-title"></div>
	</div>
		<form method="post" class="from">
			<label for="user-email" style="padding-top: 13px">Username atau E-mail</label>
			<input id="user-email" type="email" name="email" class="from-content" autocomplete="on" required/>
			<div class="from-border"></div>

			<label for="user-password" style="padding-top: 22px">Password</label>
			<input id="user-password" type="password" name="password" class="from-content" required/>
			<div class="from-border"></div>

			<a href="#">
				<legend id="lupa-pass">Lupa Password?</legend>
			</a>

			<input id="submitt" type="submit" name="login" value="LOGIN">
		</form>
	</div>
</body>
</html>