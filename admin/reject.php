<?php
    include("../config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM request WHERE id= $id";
    $query = $conn->query($sql);
    if($query) {
    echo "Account has been rejected";
    } else {
    echo "Unknown Error occured. Please try again.";
    }

?>
<br><br>
<a href="adminIndex.php">Back</a>
