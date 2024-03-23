<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display</title>
  </head>
  <body>
    <?php
    include("../include/header.php");
      include("../include/connection.php");
     ?>


     <div class="container-fluid">
     <div class="col-md-12">
     <div class="row">
       <div class="col-md-2" style="margin-left:-30px;">
        <?php include"sidenav.php"; ?>
        </div>
         <div class="col-md-10">
           <br><br>
       <h4>Logs of The doctor:</h4>
       <?php
       $query = "SELECT * FROM logs";
       $res = mysqli_query($connect,$query);
       $output = "";

       $output .= "
       <table class='table table-bordered'>
       <tr>
         <td>ID</td>
         <td>Doctor_ID</td>
         <td>Action</td>
         <td>Date </td>


       </tr>
       ";

       if(mysqli_num_rows($res) < 1) {
         $output .="
         <tr>
         <td class='text-center' colspan='5'>No Records to display.</td>
         </tr>
         ";
       }

       while($row = mysqli_fetch_array($res)) {
           $output .="
           <tr>
           <td>".$row['id']."</td>
           <td>".$row['doctor_id']."</td>
           <td>".$row['action']."</td>
           <td>".$row['cdate']."</td>


           ";
       }

       $output .="
         </tr> </table>
       ";
       echo $output;

        ?>
           <div class="col-md-14">
             <br><br>
             <h4>Patient details</h4>
               <?php
               $sql = "CALL patientdetails()";
               $res1= mysqli_query($connect,$sql);

                      $output1 = "";

                      $output1 .= "
                             <table class='table table-bordered'>
                             <tr>
                             <td>ID</td>
                             <td>Firstname</td>
                             <td>Surname</td>
                             <td>Username</td>
                             <td>Email</td>
                             <td>Phone</td>
                             <td>Gender</td>
                             <td>Country</td>
                             <td>Date Reg.</td>

                             </tr>

                      ";

                      if(mysqli_num_rows($res1) < 1) {
                        $output1 .="
                         <tr>
                         <td class='text-center' colspan='10'>No Patient</td>
                         </tr>
                        ";
                      }

                      while($row = mysqli_fetch_array($res1)) {
                        $output1 .= "
                         <tr>
                         <td>".$row['id']."</td>
                         <td>".$row['firstname']."</td>
                         <td>".$row['surname']."</td>
                         <td>".$row['username']."</td>
                         <td>".$row['email']."</td>
                         <td>".$row['phone']."</td>
                         <td>".$row['gender']."</td>
                         <td>".$row['country']."</td>
                         <td>".$row['date_reg']."</td>


                         </tr>
                        ";

                      }

                      $output1 .= "
                      </tr>
                      </table>
                      ";

                      echo $output1;
                ?>
             </details>

      </div>
      </div>
      </div>
      </div>
</div>

  </body>
</html>