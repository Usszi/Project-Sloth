<?php 
	print '
	<ul>
	<style>
	ul {
		background-color:darkgreen;
	}
    </style>
		<li><a href="index.php?menu=1"><font color=lightgreen>Home</font></a></li>
		<li><a href="index.php?menu=2"><font color=lightgreen>News</font></a></li>
		<li><a href="index.php?menu=3"><font color=lightgreen>Contact</font></a></li>
		<li><a href="index.php?menu=4"><font color=lightgreen>About</font></a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5"><font color=lightgreen>Register</font></a></li>
			<li><a href="index.php?menu=6"><font color=lightgreen>Sign In</font></a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		print '
		<li><a href="index.php?menu=10"><font color=lightgreen>Sloth-encyclopedia</font></a></li>
		<li><a href="index.php?menu=11"><font color=lightgreen>Donations exchange rate sheet</font></a></li>
	</ul>';
?>