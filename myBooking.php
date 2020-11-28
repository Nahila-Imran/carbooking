<!DOCTYPE html>
<?php include("config.php"); ?>
<html>
    <head>
         <title>Display</title>
         <link rel="stylesheet" type="text/css" href="css/style4.css">
    </head>
    <body>
    <header class="trans-img">
    <h1>Find the Best <span style="color: #AC0000;">CarForYou</span></h1>
    </header>
        <div class="container">
            <div class="head">
                <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bookTaxi.php">Book Taxi</a></li>
                    <li><a class="active" href="myBooking.php">My/Previous Bookings</a></li>
                    <li><a href="total.php">Total Charges</a></li>
                    <li><a href="update.php">Update Password/MobileNo</a></li>
                    <li><a href="sortRides.php">Sort Rides</a></li>
                    <li><a href="signIn.php">Sign In</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
          
        
            <div style="margin-left: 23%;padding:80px 16px;height:800px;">
                <h1>My <span style="color: #AC0000;">Bookings</span></h1>
                <table width="80%">
                    <tr style="text-align: left;">
                        <th>Username</th>
                        <th>Pick Up</th>
                        <th>Drop</th>
                        <th>Car Type</th>
                        <th>Luggage</th>
                        <th>Distance Covered</th>
                        <th>Total Fare</th>
                        <th>Date/Time</th>
                    </tr>
                <?php 
                    $sql = "SELECT * FROM booking";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['pickup'];?></td>
                            <td><?php echo $row['drop'];?></td>
                            <td><?php echo $row['cartype'];?></td>
                            <td><?php echo $row['luggage'];?>kg</td>
                            <td><?php echo $row['distance'];?>km</td>
                            <td>$<?php echo $row['amount'];?></td>
                            <td><?php echo $row['datetime'];?></td>
                        </tr>
            <?php        }  
                    }  ?>
                </table>
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

    </body>
 </html>