<!DOCTYPE html>
<?php
include("config.php");
$errors = array();
$message ='';

if(isset($_POST['submit'])) {
	$username = isset($_POST['username'])?$_POST['username']:'';
	$password = isset($_POST['password'])?$_POST['password']:'';
	$repassword = isset($_POST['repassword'])?$_POST['repassword']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
	$status =$_POST['status'];

	echo $username;echo $email; echo $mobile;
	
	if($username == "admin" || $username == "Admin")
	{
		echo '<script>alert("Login Successful.....Welcome!!! Admin")</script>';
		echo '<script>window.location="admin/adminIndex.php"</script>';
		header('Location: admin/adminIndex.php');
	}

	$q =  "SELECT * FROM users";
	$res = $conn->query($q);
	$cnt = mysqli_num_rows($res);

	if ($res->num_rows > 0) 
	{
		while($row = $res->fetch_assoc())
		{
			if($cnt == 1)
			{
				$errors[] = array('input'=>'username');
				$errors[] = array('input'=>'email');
				echo '<script>alert("Already Registerd Record !!!")</script>';
				echo '<script>window.location="login.php"</script>';
			}

			if($password != $repassword) 
			{
				$errors[] = array('input'=>'password','msg'=>'Password doesnt match');
			}
		}
	}
	if(sizeof($errors) == 0 && ($username != "admin" || $username != "Admin"))
	{
		$sql = "INSERT INTO users (`username`, `password`, `email`, `mobileNo`,`date`,`status`) 
				VALUES ('".$username."', '".$password."', '".$email."', '".$mobile."', CURRENT_TIMESTAMP, '".$status."')";
		if ($conn->query($sql) === TRUE) 
		{
			echo '<script>alert("New user logined successfully...!!!")</script>';
			header('Location: index.php');
		}
		else 
		{
			$errors[] = array('input'=>'form', 'msg'=>$conn->error);
		}
		$conn->close();
	//	header('Location: index.php');
				
	}
}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	
</head>
<body>
	<main>
	<div id="message">
		<?php echo $message; ?>
	</div>
	<div id= "errors">
		<?php if(sizeof($errors)>0) : ?>
			<ul>
			<?php foreach($errors as $err): ?>
				<li><?php echo $err['msg']; ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	
	<div id="wrapper">
		<div id="signup-form">
			<h1>Sign Up</h1>
				<form action="" method="POST">
					<p>
						<label for="username" class="lab">Username: <input type="text" name="username" required id="inp"></label>
					</p>
					<p>
						<label for="mobile" class="lab">Mobile: <input type="mobile" name="mobile" required id="inp3"></label>
					</p>
					<p>
						<label for="password" class="lab">Password: <input type="password" name="password" required id="inp"></label>
					</p>
					<p>
						<label for="repassword" class="lab">Re-Password: <input type="password" name="repassword" required id="inp1"></label>
					</p>
					<p>
						<label for="email" class="lab">Email: <input type="email" name="email" required id="inp2"></label>
					</p>
					<p><label for="status" class="lab">Status:
                            <select name="status" class="drop" id="inp4">
                                <option>Select Status...</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </p>
					<p>
						<input type="submit" name="submit" value="Sign Up">
					</p>
					<p><p><a href="signIn.php">Go back to login page</a></p>
				</form>
			</div>
		</div>
	</main>
</body>
</html>