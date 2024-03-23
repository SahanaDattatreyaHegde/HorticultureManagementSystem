<?php
error_reporting(0);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'test4');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into contact(name, email, message) values(?,?,?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        echo "<script>alert('Message has been sent successfully...')</script>";
                ?>
                <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture Management System/home.html">
                <?php
        $stmt->close();
        $conn->close();
    }
?>