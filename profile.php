<?php
	session_start();
	if (!isset($_SESSION["username"])){ //if user are not loged in go login
		header("Location: index.php");
	  die();
	}

?>
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
			<h2>Profile</h2>
			<?php echo "Hello ".$_SESSION["username"]."<br>"; ?>
			<h1>:)</h1>
			<a href="action/logout.php">Logout</a>
		</article>
	</section>
	<footer></footer>
</body>
</html>
