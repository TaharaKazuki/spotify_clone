<?php
	include("includes/classes/Account.php");
	include("inclueds/classes/Constants.php");
	
	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	};
?>


<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<?php echo 

				?>

			</p>
		</form>
	</div>

</body>
</html>