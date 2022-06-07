<?php

	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	$user = 'root';
	$password ='';
	$baza ='projekt';

	$MySQL = mysqli_connect("localhost",$user,$password,$baza);


	
