<?php

    include("customerreg.php");
    $Email = $_POST['Email'];
    $query = "PAYMENT FROM registration WHERE Email='$Email'";
    echo $query;
    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "<script>alert('payment done')</script>";
        ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture%20Management%20System/home.html">
        <?php
    }
    else{
        echo "<font color='red'>Sorry, Payment process failed";
    }
?> 