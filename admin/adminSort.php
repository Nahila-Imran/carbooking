<!DOCTYPE html>
<?php include("../config.php"); ?>
<html>
    <head>
         <title>Sort Rides Data</title>
         <link rel="stylesheet" type="text/css" href="css/style5.css">
    </head>
    <body>
    <header class="trans-img">
    <h1 style="padding-top: 4%;">Find the Best <span style="color: #3CB371;">CarForYou</span></h1>
    </header>
        <div class="container">
            <div class="head">
                <div class="nav">
                <ul>
                    <li><a href="adminIndex.php">Home</a></li>
                    <li><a href="rideRequest.php">New Ride Request</a></li>
                    <li><a href="adminBooking.php">Booking Details</a></li>
                    <li><a href="adminTotal.php">Total Earnings</a></li>
                    <li><a class="active" href="adminSort.php">Sort Rides</a></li>
                    <li><a href="blockUnblock.php">Block/Unblock</a></li>
                    <li><a href="../logout.php">Sign Out</a></li>
                </ul>
          
        
            <div style="margin-left: 23%;padding:40px 16px;height:650px;">
                <h1>Sorted <span style="color: #3CB371;">Booking Details</span></h1>
                <h3 style="margin-top: 15px; color: #3CB371;">By Name</h3>
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
                    $sql = "SELECT * FROM booking ORDER BY name DESC";
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
                <h3 style="margin-top: 15px; color: #3CB371;">By Date & Time</h3>
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
                    $sql = "SELECT * FROM booking ORDER BY datetime DESC";
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
                <h3 style="margin-top: 15px; color: #3CB371;">By Fare</h3>
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
                    $sql = "SELECT * FROM booking ORDER BY amount DESC";
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