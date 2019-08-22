<html lang="en" dir="ltr">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
		<link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Log In | TechnoParty</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
            session_start();

            if(isset($_SESSION['ID_ADMIN'])) {
                header('location:index.php');
                }
            require_once("koneksi.php");
        ?>
        

<form class="box" action="proseslogin.php" method="post">
	<h1>Login</h1>
	<input name="ID_ADMIN" type="text"  placeholder="Enter Username">		
	<input name="PASS" type="password" placeholder="Enter Password" >
	<input type="submit" name="" value="Log In">
	<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
	</div>
	<a href="registration.php ?>">Don't have an account ?</a><br>
	<a href="#">Lost your password?</a>
</form>





	</body>
</html>