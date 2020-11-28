<?php
    include("../config.php");
    
        $idd = $_GET['id'];
        echo $idd;
        
        $sql = "SELECT * FROM users WHERE user_id=$idd";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                if($row['status'] == 0){
                    $query = "UPDATE users SET status='1' WHERE user_id='$idd' " ;
                }
                else{
                    $query = "UPDATE users SET status='0' WHERE user_id='$idd' " ;
                }
            $run = $conn->query($query);
            if ($run) {       
                echo '<script>alert("Status changed...!!!")</script>';
            	echo '<script>window.location="blockUnblock.php"</script>';
            }else {
                echo '<script>alert("Error in changing status")</script>';
                echo '<script>window.location="blockUnblock.php"</script>';
            }
        }
    }
?>