<!doctype html>
<html lang="es">
<head>
	<!-- Meta information -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">

	<!--Google Fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

	<!-- Link to CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<!-- Alternative CSSs -->
	<!--
	<link rel="stylesheet" href="css/style_green.css" type="text/css"/>
	-->

	<!-- External login JS -->
	<script  type="text/javascript" src="js/login.js"></script>

	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />

	<!-- Page title -->
	<title>User App</title>
</head>
<body>
	<header>User App</header>
	<section id="section-login">
		<article id="article-login">
			<h2>Log in</h2>
			<form onsubmit="return validate_login();" action="action/login.php" method="POST">
				<div class="question">
					<input type="text" name="username" id="username" placeholder="username" onblur="validate_username();" required><br>
					<div class="error" id="message_username"></div>
				</div>
				<div class="question">
					<input type="password" name="password" id="password" placeholder="password" onblur="validate_password();" required><br>
					<div class="error" id="message_password"></div>
				</div>
				<input type="checkbox" id="rememberuser" name="rememberuser" value="rememberuser">
				<label for="rememberuser">Remember username</label><br>
				<input type="submit" value="Send" >
			</form>
			<p class="join-or-login">Don't have an account? <a href="register.php">Join now.</a></p>
		</article>
	</section>
	<footer></footer>
</body>
</html>
