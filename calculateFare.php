<?php
    include("config.php");
    include("config1.php");
    session_start();
?>
<?php
	
    if(isset($_POST['submit'])) 
    {
        $user = $_POST["username"];
        $email = $_POST["email"];
        $pickup = $_POST["pickupLocation"];
        $drop = $_POST["dropLocation"];
        $carType = $_POST["carType"];
        $luggage = $_POST["luggage"];
        $distance = '';
        $fare = 0;
    
        $sql = "SELECT * FROM users" ;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
            //    echo $row['username'];
                if($user == $row['username'] && $email == $row['email']){}
    /*            elseif($row['username'] != $user && $email != $row['email'])
                {
                    echo '<script>alert("Invalid Login Details...!!! Please Sign Up")</script>';
                    echo '<script>window.location="login.php"</script>';
                } */
            }
        }
        

        foreach($car as $key1 => $value1)
        {
            foreach($value1 as $key2 => $value2)
            {
                if(($value2['pick'] == "$pickup") && ($value2['drop'] == "$drop"))
                {
                    $distance = $value2['distance'];
                    if($carType == "CedMicro")
                    {
                        if($value2['distance'] <= 10)
                        {
                            $fare = 50 + $value2['distance']*13.50;
                        }
                        elseif($value2['distance'] <= 50)
                        {
                            $fare = 50 + (10*13.50) + ($value2['distance'] - 10)*12;
                        }
                        elseif($value2['distance'] <= 100)
                        {
                            $fare = 50 + (10*13.50) + (50*12) + ($value2['distance'] - 60)*10.20;
                        }
                        elseif($value2['distance'] > 100)
                        {
                            $fare = 50 + (10*13.50) + (50*12) + (40*10.20) + ($value2['distance'] - 100)*8.50 ;
                        }
                    }
                    if($carType == "CedMini")
                    {
                        if($value2['distance'] <= 10)
                        {
                            $fare = 150 + $value2['distance']*14.50;

                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] <= 50)
                        {
                            $fare = 150 + (10*14.50) + ($value2['distance'] - 10)*13;

                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] <= 100)
                        {
                            $fare = 150 + (10*14.50) + (50*13) + ($value2['distance'] - 60)*11.20;

                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] > 100)
                        {
                            $fare = 150 + (10*14.50) + (50*13) + (40*11.20) + ($value2['distance'] - 100)*9.50 ;

                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }
                    }

                    if($carType == "CedRoyal")
                    {
                        if($value2['distance'] <= 10)
                        {
                            $fare = 200 + $value2['distance']*15.50;

                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] <= 50)
                        {
                            $fare = 200 + (10*15.50) + ($value2['distance'] - 10)*14;
                        
                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] <= 100)
                        {
                            $fare = 200 + (10*15.50) + (50*14) + ($value2['distance'] - 60)*12.20;
                        
                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }

                        elseif($value2['distance'] > 100)
                        {
                            $fare = 200 + (10*15.50) + (50*14) + (40*12.20) + ($value2['distance'] - 100)*10.50 ;
                            
                            if($luggage <= 10)
                                $fare += 50;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 100;
                            if($luggage > 20)
                                $fare += 200;
                        }
                    }
                    if($carType == "CedSUV")
                    {
                        if($value2['distance'] <= 10)
                        {
                            $fare = 250 + $value2['distance']*16.50;
                            
                            if($luggage <= 10)
                                $fare += 100;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 200;
                            if($luggage > 20)
                                $fare += 400;
                        }
                        elseif($value2['distance'] <= 50)
                        {
                            $fare = 250 + (10*16.50) + ($value2['distance']- 10)*15;

                            if($luggage <= 10)
                                $fare += 100;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 200;
                            if($luggage > 20)
                                $fare += 400;
                        }

                        elseif($value2['distance'] <= 100)
                        {
                            $fare = 250 + (10*16.50) + (50*15) + ($value2['distance'] - 60)*13.20;

                            if($luggage <= 10)
                                $fare += 100;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 200;
                            if($luggage > 20)
                                $fare += 400;
                        }

                        elseif($value2['distance'] > 100)
                        {
                            $fare = 250 + (10*16.50) + (50*15) + (40*13.20) + ($value2['distance'] - 100)*11.50 ;

                            if($luggage <= 10)
                                $fare += 100;
                            if($luggage > 10 && $luggage < 21)
                                $fare += 200;
                            if($luggage > 20)
                                $fare += 400;
                        }
                    }
                }
            }
        }

        $bookCar = array("user"=>$user , "email"=>$email , "pickup"=>$pickup, 
        "drop"=>$drop , "carType"=>$carType , "luggage"=>$luggage, "total"=>$fare, "distance"=>$distance);
        $_SESSION['booking'][0] = $bookCar;

        // $date = date('F d, Y, g: i a');
        $sql = "INSERT INTO request (`name`, `pickup`, `drop`, `cartype`,`luggage`, `distance`, `amount`, `datetime`, `email`) 
            VALUES ('".$user."', '".$pickup."', '".$drop."', '".$carType."', '".$luggage."', '".$distance."', '".$fare."', CURRENT_TIMESTAMP, '".$email."')";
        if ($conn->query($sql) === TRUE) 
        {
            echo '<script>alert("Your account request is now pending for approval. Please wait for confirmation by admin...Thank you!!!")</script>';
        }
        else 
        {
            echo '<script>alert("Unknown Error occured")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR FARE</title>
    <style>
        body {
            background: #F5F5F5;
            margin: 10% 0 0 0;
            text-align: center;
            justify-content: center;
        }
        h1{
            color: green;
            margin-top: 60px;
        }
        p{
            font-size: 17px;
        }
        .wrapper{
            display: inline-block;
            padding: 20px;
            background: lightgrey;
            border:3px solid #E0E0E0;
            border-radius: 10px;
            height: 350px;
        }
      
    </style>
</head>
<body>
    <div class="wrapper">
        <p><b>Cab Type: </b><?php echo $carType; echo '<br>'; ?></p>
        <p><b>Pick Up Point Location is : </b><?php echo $pickup; echo '<br>'; ?></p>
        <p><b>Dropping Point Location is : </b><?php echo $drop; echo '<br>'; ?></p>
        <p><b>Total Distance covered is : </b><?php echo $distance ;?> km <?php echo '<br>'; ?></p>
        <p><b>Total Car Fare is: Rs. </b><?php echo $fare; ?></p>
    </div>
    
</body>
</html>