<?php 
	print '
	<h1><font color=darkgreen>Sign In form</font></h1>
	<div id="signin">';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<form action="" name="myForm" id="myForm" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">

			<label for="username"><font color=lime>Username:*</font></label>
			<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									
			<label for="password"><font color=lime>Password:*</font></label>
			<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									
			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (password_verify($_POST['password'], $row['password'])) {
			
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			
			$_SESSION['user']['role'] = $row['role'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['message'] = '<p>Welcome, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
			
			header("Location: index.php?menu=7");
		}
		
		
		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>You entered wrong email or password!</p>';
			header("Location: index.php?menu=6");
		}
	}
	print '
	</div>';
?>