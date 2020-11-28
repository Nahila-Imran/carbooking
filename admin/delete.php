<?php include("../config.php");

$idd = $_GET['id'];
$delete_sql = "DELETE FROM booking WHERE id=$idd";
$query = $conn->query($delete_sql);
    if($query){?>       
        <script>
            alert("Record Deleted successfully!!!");
            window.location="adminBooking.php";
        </script>
<?php   }else {?>
            <script>
                alert("Error in Record Deletion!!!");
                window.location="adminBooking.php";
            </script>
<?php   }
?>

