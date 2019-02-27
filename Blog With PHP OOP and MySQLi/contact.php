<?php include 'inc/header.php' ; ?>

<style>
.customerror{
	color:red;
	float:left;
}
</style>

<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$firstname=$fm->validation($_POST['firstname']);
		$lastname=$fm->validation($_POST['lastname']);
		$email=$fm->validation($_POST['email']);
		$message=$fm->validation($_POST['message']);

		$firstname=mysqli_real_escape_string($db->link, $firstname); //mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
		$lastname=mysqli_real_escape_string($db->link, $lastname);
		$email=mysqli_real_escape_string($db->link, $email);
		$message=mysqli_real_escape_string($db->link, $message);

		$errorAllfield="";
		$errorfirstname="";
		$errorlastname="";
		$erroremail="";
		$errormessage="";

		if ($firstname=="" && $lastname=="" && $email=="" && $message=="") {
			$errorAllfield="All  Feild Must not be empty !";		
		}
		elseif (empty($firstname)) {
			$errorfirstname="First name must not be empty !";
		}
		elseif (empty($lastname)) {
			$errorlastname="Last name must not be empty !";
		}
		elseif (empty($email)) {
			$erroremail="Email Address must not be empty !";
		}
		elseif (empty($message)) {
			$errormessage="Message Feild must not be empty !";
		}	
		// $error="";
		// if (empty($firstname)) {
		//  $error="First name must not be empty !";
		// }elseif (!filter_var($firstname,FILTER_SANITIZE_SPECIAL_CHARS)) { //just testing
		// 	$error="Invalid First Name !";
		// }elseif (empty($lastname)) {
		// 	$error="Last name must not be empty !";
		// }elseif (empty($email)) {
		// 	$error="Email must not be empty !";
		// }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		// 	$error="Invalid Email Address !";
		// }elseif (empty($message)) {
		// 	$error="Message feild must not be empty !";
		// }
			else {
			$query="INSERT INTO tbl_contact(firstname,lastname,email,message) VALUES('$firstname','$lastname','$email','$message')";
               
			$inserted_rows=$db->insert($query);
			if($inserted_rows){
				//echo "<span class='success'>Message Sent Successfuly.</span>";  //previous method
				$msg="Message Sent Successfuly.";  //new method
			}else{
				//echo "<span class='error'>Message not Sent</span>";
				$error="Message not Sent";
			}
		}
	}
?>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php
					// if (isset($error)) { //if isset is eeror
					// 	echo "<span style='color:red'>$error</span>";
					// }
					// if (isset($msg)) {
					// 	echo "<span style='color:green'>$msg</span>";
					// }
				?>
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td> 
						<?php 
							if (isset($errorfirstname)) { //if isset is eeror
								echo "<span class='customerror'>$errorfirstname</span>";
							} 
						?>
						<input type="text" name="firstname" placeholder="Enter first name"/>   <!-- required="1" -->
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td> 
						<?php 
							if (isset($errorlastname)) { //if isset is eeror
								echo "<span class='customerror'>$errorlastname</span>";
							} 
						?> 
						<input type="text" name="lastname" placeholder="Enter Last name"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td> 
						<?php 
							if (isset($erroremail)) { //if isset is eeror
								echo "<span class='customerror'>$erroremail</span>";
							}
						?>
						<input type="email" name="email" placeholder="Enter Email Address"/>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td> 
						<?php 
							if (isset($errormessage)) { //if isset is eeror
								echo "<span class='customerror'>$errormessage</span>";
							} 
						?>
						<textarea name="message"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Send"/>
					</td>	
				</tr>
				<tr>
					<td></td>
					<td>
						<?php 
							if (isset($errorAllfield)) { //if isset is eeror
								echo "<span class='customerror'>$errorAllfield</span>";
							}
							
							if (isset($msg)) {
								echo "<span style='color:green'>$msg</span>";
							} 
							if (isset($error)) { //if isset is eeror
								echo "<span style='color:red'>$error</span>";
							}
							
						?>
					</td>
				</tr>
		</table>
	<form>				
 </div>
</div>
		
<?php include 'inc/sidebar.php';?>
<?php include 'inc/footer.php';?>