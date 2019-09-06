<html lang="en" dir="ltr">
	<head>
	<title>Log In | TechnoParty</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/login.css">
	</head>

	<body>
<form class="box" action="loginproses.php" method="post">
	<h1>Login Admin</h1>
	<div class="text-container">
 		 <input name="ID_ADMIN" type="text" placeholder="Username" required>
	</div>	
	<div class="input-container">
 		 <input name="PASS" type="password" placeholder="Password" required/>
  			<i class="material-icons visibility">visibility_off</i>
	</div>
	
	<input type="submit" name="" value="Log In">
</form>

<script>
const visibilityToggle = document.querySelector('.visibility');

const input = document.querySelector('.input-container input');

var password = true;

visibilityToggle.addEventListener('click', function() {
  if (password) {
    input.setAttribute('type', 'text');
    visibilityToggle.innerHTML = 'visibility';
  } else {
    input.setAttribute('type', 'password');
    visibilityToggle.innerHTML = 'visibility_off';
  }
  password = !password;
  
});
</script>




	</body>
</html>