<?php 
	include '../lib/Session.php' ;
	//Session::init();	
	Session::checkLogin();  //New Updated 
?>

<?php include '../config/config.php' ; ?>
<?php include '../lib/Database.php' ; ?>
<?php include '../helpers/Format.php' ; ?>

<?php 
	$db= new Database();
	$fm= new Format();
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">

	<?php
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$username=$fm->validation($_POST['username']);
			$password=$fm->validation(md5($_POST['password']));

			$username=mysqli_real_escape_string($db->link, $username); //mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
			$password=mysqli_real_escape_string($db->link, $password);

			$query= "SELECT *FROM tbl_user WHERE username= '$username' AND password = '$password' ";
			$result= $db->select($query);
			
			if($result != false){
				//$value=mysqli_fetch_array($result); //The mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.
				//$row= mysqli_num_rows($result); // The mysqli_num_rows() function returns the number of rows in a result set
				
					$value= $result->fetch_assoc();
					Session::set("login",true);
					Session::set("username", $value['username']);
					Session::set("userId",$value['id']);
					Session::set("userRole",$value['role']);  //new add
					header("Location:index.php");
	
			}else {
				echo "<span style='color:red; font-size:18px;'>Username or Password Not found</span>";
			}
		}  
		//The mysqli_fetch_assoc() function fetches a result row as an associative array.
	?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->

		<div class="button">
			<a href="forgetpass.php">Forget Password !</a>
		</div>		
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>