<?php
    include("../config.php");
    session_start();
    if(isset($_POST['logout'])){
        session_destroy();
        header('location: ../signIn.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Admin-Home</title>
    
</head>
<body>
    <header class="back2-image">
        <h1 style="padding-top: 8%; color:white;" >Hii <span style="color: #3CB371;">admin !!!</span></h1>
    </header>
        <div class="container">
            <div class="head">
                <div class="nav">
                <ul>
                    <li><a href="adminIndex.php">Home</a></li>
                    <li><a class="active" href="rideRequest.php">New Ride Request</a></li>
                    <li><a href="adminBooking.php">Booking Details</a></li>
                    <li><a href="adminTotal.php">Total Earnings</a></li>
                    <li><a href="adminSort.php">Sort Rides</a></li>
                    <li><a href="blockUnblock.php">Block/Unblock</a></li>
                    <li><a href="../logout.php">Sign Out</a></li>
                </ul>
                <div style="margin-left: 23%; padding:1px 25px;height:730px;">
                <form method='post' action="">
                    <button name="logout" style="background:#3CB371;color: white; float:right; padding: 12px 18px; font-size:16px;">Logout</button>
                </form>
               <?php 
                    $sql = "SELECT * FROM request";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { ?>
                            
                            <h1 style="font-size: 40px; margin-top: 10%; "><?php echo $row['email'];?></h1>
                            <p>Hii, Please accept my request</p>
                            <p><b><?php echo $row['name'] ;?></b> would like to request an account</p>
                            <p>
                                <a href="accept.php?id=<?php echo $row['id'];?>"><input type="button1" name="submit" style="background: #AC0000;" value="Accept"></a>
                                <a href="reject.php?id=<?php echo $row['id'];?>"><input type="button2" name="submit"  style="background: #3CB371;" value="Reject"></a>
                            </p>
                            <small><i><?php echo $row['datetime'];?></i></small>
        <?php       }  
                }  
                else{ ?>
                    <p>No, pending request...</p>
<?php           } ?>
                
            </div>
        </div>
    </div>
</div>
       <div class="foot">
            <div class="hero-image">
                <div class="hero-text">
                    <div class="column">
                        <span>
                            <div  class="bfoot">
                                <h2><i class="fa fa-calendar" aria-hidden="true" style="font-size:40px; padding: 0 30px;"></i></h2>
                                <h2>40+</h2>
                                <p style="font-size: 20px; margin-top: 8px;">Years In Business</p>
                            </div>
                            <div  class="bfoot">
                                <h2><i class="fa fa-car" aria-hidden="true" style="font-size:30px; padding: 0 40px;"></i></h2>
                                <h2>12000+</h2>
                                <p style="font-size: 20px; margin-top: 8px;">New Cars For Sale</p>
                            </div>
                            <div  class="bfoot">
                                <h2><i class="fa fa-car" aria-hidden="true" style="font-size:30px; padding: 0 40px;"></i></h2>
                                <h2>1000+</h2>
                                <p style="font-size: 20px; margin-top: 8px;">Used Cars For Sale</p>
                            </div>
                            <div  class="bfoot">
                                <h2><i class="far fa-user-circle" aria-hidden="true" style="font-size:30px; padding: 0 40px;"></i></h2>
                                <h2>600+</h2>
                                <p style="font-size: 20px; margin-top: 8px;">Satisfied Customers</p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Get in touch:</p>
            <form>
                <table>
                    <tr>
                        <td>Name :<input type="text" id="name" name="name" placeholder="Name"></td>
                        <td>E-mail :<input type="text" id="email" name="email" placeholder="E-mail"></td>
                        <td><input type="submit" value="Subscribe"></td>
                    </tr>
                </table>
            </form>
</div>

</body>
</html>