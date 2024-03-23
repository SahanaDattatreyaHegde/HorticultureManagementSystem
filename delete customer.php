<?php

    include("customerreg.php");
    $Email = $_POST['Email'];
    $query = "DELETE FROM registration WHERE Email='$Email'";
    echo $query;
    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "<script>alert('Record Deleted')</script>";
        ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture%20Management%20System/delete%20customer.html">
        <?php
    }
    else{
        echo "<font color='red'>Sorry, Delete process failed";
    }
?> 