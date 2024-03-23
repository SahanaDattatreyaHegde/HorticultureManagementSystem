<?php
    $servername = 'localhost';
    $username = 'root';
    $password ='';
    $dbname = 'test1';

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
        echo " ";
    }
    else{
        echo "failed connection";
    }
?>