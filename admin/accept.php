<?php
    include("../config.php");
    $id = $_GET['id'];

    $sql1 = "SELECT * from request where id='$id'";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = $row['name'];
            $pickup = $row['pickup'];
            $drop = $row['drop'];
            $carType = $row['cartype'];
            $luggage = $row['luggage'];
            $distance = $row['distance'];
            $fare = $row['amount'];
            
$sql2 = "INSERT INTO booking (`name`, `pickup`, `drop`, `cartype`,`luggage`, `distance`, `amount`, `datetime`) 
VALUES ('".$user."', '".$pickup."', '".$drop."', '".$carType."', '".$luggage."', '".$distance."', '".$fare."', CURRENT_TIMESTAMP)";

if ($conn->query($sql2) === TRUE) 
{
    echo '<script>alert("Inserted...!!!")</script>';
}
}

        $sql3 = "DELETE FROM request WHERE id = $id";
        $query = $conn->query($sql3);

        if($query) {
            echo "Account has been accepted";
        } 
        else {
        echo "Unknown Error occured. Please try again.";
        }
    }
    else{
        echo "Error Occured";
    }

?>
<br><br>
<a href="adminindex.php">Back</a>