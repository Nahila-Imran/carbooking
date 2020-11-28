<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>CAR RENTAL FARE</title>
</head>
<body>
    <header class="trans-img">
        <div class="head">
        <a href="index.php" style="float: left; margin: 20px; font-size: 25px;">Back</a>
            <div class="container">
                <h1>Book a City Taxi to your destination in town</h1>
                <p>Choose from a range of categories and prices</p> 
            </div>
            <div class="contain">
                <h5>CITY TAXI</h5>
                <div><b>Your everyday travel partner</b></div>
                <p>AC cabs for point to point travel</p>
                <div class="form">
                    <form action="calculateFare.php" method="POST">
                        <p>USERNAME<input type="text" name="username" class="form-control" placeholder="Username..."></p>
                        <p>E-MAIL<input type="text" name="email" class="form-control" id="inp3" placeholder="E-mail..."></p>
                        <p>PICK UP
                            <select name="pickupLocation" class="dropdown" id="inp1">
                                <option>Current Location</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Basti">Basti</option>
                                <option value="Gorakhpur">Gorakhpur</option>  
                            </select>
                        </p>
                        <p>DROP
                            <select name="dropLocation" class="dropdown" id="inp2">
                                <option>Enter drop for ride estimate</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Basti">Basti</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                            </select>
                        </p>
                        <p>CAB TYPE
                            <select name="carType" class="dropdown">
                                <option>Drop Down to select CAB TYPE</option>
                                <option value="CedMicro">CedMicro</option>
                                <option value="CedMini">CedMini</option>
                                <option value="CedRoyal">CedRoyal</option>
                                <option value="CedSUV">CedSUV</option>
                            </select>
                        </p>
                        <p>LUGGAGE<input type="text" name="luggage" class="form-control" placeholder="Enter weight in kg"></p>
                        <input type="submit" name="submit" value="Calculate Fare">
                    </form>
                    <a href="index.php" style="float: right;">Back</a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>