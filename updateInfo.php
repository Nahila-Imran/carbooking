<!DOCTYPE html>
<?php include("config.php"); 
$message ='';
$errors = array();
?>
<?php   
if(isset($_POST['update'])) {
    $idUp = $_GET['id'];
    $mobileNo = $_POST['mobile'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword) {
        $errors[] = array('input'=>'password','msg'=>'Password doesnt match');
    }
    $sl = "UPDATE users SET mobileNo='$mobileNo', password='$password' WHERE user_id=$idUp";
    //echo $sl;
    $run = $conn->query($sl);
    if ($run) {
    ?>       
    <script>
        alert("Record updated successfully!!!");
    </script>
<?php       
    }else {?>
        <script>
            alert("Error in Record updation");
        </script>
<?php   
    }
}?>  
<?php   
        $ids = $_GET['id'];
        $sql = "SELECT * FROM users WHERE user_id=$ids";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($res);
   ?>   

	<html>
    <head>
	    <title>Updation</title>
	    <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
    <body style="background: #E0E0E0">
    <div id="message">
		<?php echo $message; ?>
	</div>
	<div id="wrapper">
		<div id="signup-form">
			<h1>Update Mobile Number & Password</h1>
				<form action="" method="POST">
					<p>
						<label for="mobile" class="lab">Mobile: <input type="mobile" name="mobile" value="<?php echo $data['mobileNo'];?>" required id="inp3"></label>
					</p>
					<p>
						<label for="password" class="lab">Password: <input type="password" name="password" value="<?php echo $data['password'];?>" required id="inp"></label>
					</p>
					<p>
						<label for="repassword" class="lab">Re-Password: <input type="password" name="repassword" value="<?php echo $data['password'];?>" required id="inp1"></label>
					</p>
					<p>
                        <a href="updateInfo.php?id=<?php echo $data['user_id'];?>"><input type="submit" name="update" value="Update"></a>
                        <a href="update.php"><input type="button" name="button" value="Check Details"></a>
					</p>
				</form>
			</div>
		</div>
	
</body>
</html>
