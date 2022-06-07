<?php 
	print '
	<h1><font color=darkgreen>Contact Form</font></h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/place/Santuario+de+Perezosos+de+Costa+Rica/@9.791,-82.974631,12z/data=!4m8!1m2!2m1!1ssloth+!3m4!1s0x0:0x6520ebccd419922d!8m2!3d9.7990819!4d-82.9145908" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="https://www.worldwildlife.org/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname"><font color=lime>First Name *</font></label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname"><font color=lime>Last Name *</font></label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email"><font color=lime>Your E-mail *</font></label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country"><font color=lime>Country</font></label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="DE">Germany</option>
				<option value="HR">Croatia</option>
				<option value="CR">Costa Rica</option>
				<option value="RU">Russia</option>
				<option value="HU">Hungary</option>
				<option value="PL">Poland</option>
				<option value="RO">Romania</option>
			</select>

			<label for="subject"><font color=lime>Subject</font></label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>