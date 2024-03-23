<?php
    session_start();
   error_reporting(0);
    $Name = $_POST['Name'];
    echo $Name;
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $Requirement=$_POST['Requirement'];
    $PhoneNumber=$_POST['Phone'];
    
    $conn = new mysqli("localhost","root","","test2");
    if($conn->connect_errno){
        die('REGISTRATION FAILED: '.$conn->connect_error);
     }
     else{
       /*
         $stmt=$conn->prepare("insert into registration(Name, Email, Password, Requirement, PhoneNumber)VALUES(?, ?, ?, ?,?) ");
         $stmt->bind_param("ssssi",$Name, $Email, $Password, $Requirement, $PhoneNumber);
         $stmt->execute();
         echo "<script>alert('Registration Successfull!!..')</script>"; */
         echo $Email.'<br>';
         echo $Password.'<br>';
         echo $Requirement.'<br>';
         echo $PhoneNumber.'<br>';
         $sql = "INSERT INTO `registration` (`Name`, `Email`, `Password`, `Requirement`, `PhoneNumber`) VALUES('$Name', '$Email', '$Password', '$Requirement', '$PhoneNumber')";
         $result = mysqli_query($conn, $sql);
         if(!$result){
            echo "connection not done";
         }
         else{
             echo "Connection successful";
         } 
         ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/Horticulture Management System/customerlogin.html"> 
        <?php
        $conn->close();
    }
?>