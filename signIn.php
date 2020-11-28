<!DOCTYPE html>
<?php
include("config.php");
session_start();

if(isset($_POST['submit'])) 
{
	$username = $_POST['username'];
    $password = $_POST['password'];
    
		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
				
                if(($username=="admin" || $username=="Admin") && $password == "password123$")
                {    
                    $_SESSION['login'] = true;
                    echo '<script>alert("Login Successful.....Welcome!!! Admin")</script>';
                    echo '<script>window.location="admin/adminIndex.php"</script>';
                //    header('Location: admin/adminIndex.php');
				}
				elseif($row['status'] == 0)
				{
					echo '<script>alert("This ID is blocked, Please contact to Admin !!!")</script>';
                    echo '<script>window.location="signIn.php"</script>';
				}
				elseif($row['username']==$username && $row['password']==$password)
                {    
                //    $_SESSION['login'] = true;
                    echo '<script>alert("Login Successful.....Welcome!!! Admin")</script>';
                    echo '<script>window.location="index.php"</script>';
                    header('Location: index.php');
                }
                else
                {
					echo '<script>alert("Invalid Login Details!!!")</script>';
					echo '<script>window.location="signIn.php"</script>';
		        } 
            }
        }
        else 
        {
			echo '<script>alert("ERROR!!!")</script>';
		}
		$conn->close();
	}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
	<title>
		Login
	</title>
</head>
<body style="background: #e0e0e0;">
	<div id="wrapper">
		<div id="login-form">
			<h2 style="padding-top: 12%;">Sign In</h2>
			<form action="signIn.php" method="POST">
				<p>
					<label for="username">Username: <input type="text" name="username" required></label>
				</p>
				<p>
					<label for="password">Password: <input type="text" name="password" required></label>
				</p>
				<p>
					<input type="submit" name="submit" value="Sign In">
                </p>
                <p><a href="login.php">Create an account</a></p>
			</form>
		</div>
	</div>
</body>
</html>