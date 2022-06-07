<?php 
	
	define('__APP__', TRUE);

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    session_start();
	
	
	include ("dbconn.php");
	

    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	

    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	

    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Sloth">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Sloth">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Sloth">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="kuzela1@vvg.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="3.jpg" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Sloth</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	

	if (!isset($menu) || $menu == 1) { include("home.php"); }
	

	else if ($menu == 2) { include("news.php"); }
	

	else if ($menu == 3) { include("contact.php"); }
	

	else if ($menu == 4) { include("about-us.php"); }
	

	else if ($menu == 5) { include("register.php"); }
	

	else if ($menu == 6) { include("signin.php"); }
	

	else if ($menu == 7) { include("admin.php"); }


	else if ($menu == 10) { include("zoo-encyclopedia.php"); }

	else if ($menu == 11) { include("admin/hnb-json.php"); }
	
	
	print '
	</main>
	<footer>
	<style>
	footer {
		background-color:darkgreen;
	}
    </style>
		<p><font color=lightgreen>Copyright &copy; ' . date("Y") . ' Karlo Uzelac </font></p>
	</footer>
</body>
</html>';
?>
