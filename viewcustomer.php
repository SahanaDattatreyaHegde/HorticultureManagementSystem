<?php 
    error_reporting(0);
    $Name = $_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $Requirement=$_POST['Requirement'];
    $PhoneNumber=$_POST['Phone'];
    
    $conn=new mysqli('localhost','root','','test2');
    if($conn->connect_error){
        die('REGISTRATION FAILED: '.$conn->connect_error);
     }
     else{
     $query = "SELECT * FROM registration";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total != 0)
    {
        ?>
        <body>
        <h1>CUSTOMER DETAILS</h1>

        <table style = "text-align: center";>
            <tr id = "header">
                
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Requirement</th>
                <th>Phone</th>
            </tr>
        <?php

        while($result = mysqli_fetch_assoc($data))       
        {
            echo "<tr>
                    <td>".$result['Name']."</td>
                    <td>".$result['Email']."</td>
                    <td>".$result['Password']."</td>
                    <td>".$result['Requirement']."</td>
                    <td>".$result['PhoneNumber']."</td>
                  
                </tr> ";
        }
    }
    else{
        echo "No Records found";
    }
}
    ?>
    </body>
    </table>
    <style>
            body{
                padding: 0;
                margin: 0;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            table{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                border-collapse: collapse;
                width: 800px;
                height: 200px;
                border: 1px solid #bdc3c7;
                box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
            }
            tr {
                transition: all .2s ease-in;
                cursor: pointer;
            }
            th,td{
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd; 
            }
            #header{
                background-color: #16a085;
                color: #fff;
            }
            h1{
                font-weight: 600;
                text-align: center;
                background-color:#16a085;
                color: #fff;
                padding: 10px 0px;
            }
            tr:hover{
                background-color: #f5f5f5;
                transform: scale(1.02);
                box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
            }
        </style>