<?php
    include 'connection.php';

    if(isset($_POST['Add_Customer'])){
        header("Location:.html");
    }

    if(isset($_POST['view_Customer'])){
        header("Location:viewcustomer.php");
    }

    if(isset($_POST['Remove_Customer'])){
        header("Location:http://localhost/Horticulture%20Management%20System/delete%20customer.html");
    }

    

    if(isset($_POST['back_to_home'])){
        echo "<script>alert('Log Out Successfull....')</script>";
        ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture Management System/home.html">
        <?php
    }
