<?php
    error_reporting(0);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","test3");
    if($con->connect_error)
    {
       die("Failed to connect: ".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from login where email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data=$stmt_result->fetch_assoc();
            if($data['password']== $password) 
            {
                echo"<script>alert('Login Successful')</script>";
            }

        }
        else{
            echo"<h2>invalid email or password</h2>";
        }
        ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture Management System/productdetails.html"> 
        <?php
        $conn->close();
    }
    ?>               