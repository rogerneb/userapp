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
	<script  type="text/javascript" src="js/register.js"></script>

	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />

	<!-- Page title -->
	<title>User App</title>
</head>
<body>
	<header>User App</header>
	<section id="section-login">
		<article id="article-login">
			<h2>Register</h2>
			<form onsubmit="return validate_register();" action="action/action.php" method="POST">
				<div class="question">
					<input type="text" name="username" id="username" placeholder="username" onblur="validate_username();" required><br>
					<div class="error" id="message_username"></div>
				</div>
				<div class="question">
					<input type="email" name="email" id="email" placeholder="email" onblur="validate_email();" required><br>
					<div class="error" id="message_email"></div>
				</div>
				<div class="question">
					<input type="password" name="password" id="password" placeholder="your password" onblur="validate_password();" required><br>
					<div class="error" id="message_password"></div>
				</div>
				<div class="question">
					<input type="password" name="password2" id="password2" placeholder="repeat password" onblur="validate_password2();" required><br>
					<div class="error" id="message_password2"></div>
				</div>
				<input type="submit" value="Send" >
			</form>
			<p><a href=".">Login</a> if already have an account.</p>
		</article>
	</section>
	<footer></footer>
</body>
</html>
