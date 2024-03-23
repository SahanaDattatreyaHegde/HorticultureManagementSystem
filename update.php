<?php
include("connection.php");
error_reporting(0);
    $_GET['USN'];
    $_GET['StudentName'];
    $_GET['email'];
    $_GET['PhoneNumber'];
    $_GET['gender'];
    $_GET['CGPA'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-left h-100">
            <div class="card w-50 my-auto shadow">
                <div class="card-header text-center bg-info text-white">
                    <h5>UPDATE FORM</h5>
                </div>
                <div class="card-header text-white bg-dark mb-3">
                    <div class="card border-success mb3"></div>
                    <div class="card-body">
                        <form action=" " method="GET">
                            <div class="form-group">
                                <label for="USN">USN</label>
                                <input required type="text" class="form-control" id="USN" name="USN" value="<?php echo $_GET['USN']; ?>"/>
							</div>
                            <div class="form-group">
                                <label for="StudentName">Student Name</label>
                                <input required type="text" class="form-control" id="StudentName" name="StudentName" value="<?php echo $_GET['StudentName']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="PhoneNumber">Phone Number</label>
                                <input required type="text/number" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $_GET['PhoneNumber']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input required type="email" class="form-control" id="Email" name="Email" value="<?php echo $_GET['Email']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="CGPA">CGPA</label>
                                <input required type="text/number" class="form-control" id="CGPA" name="CGPA"  value="<?php echo $_GET['CGPA']; ?>"/>
                            </div>
                                <input type="submit" class="btn btn-info" name="submit" value="Update"/>
<?php
    if($_GET['submit'])
    {
       $USN = $_GET['USN'];
       $StudentName = $_GET['StudentName'];
       $Email = $_GET['Email'];
       $PhoneNumber = $_GET['PhoneNumber'];
       $gender = $_GET['gender'];
       $CGPA = $_GET['CGPA'];
       $query = "UPDATE registration SET USN='$USN', StudentName='$StudentName', Email='$Email', PhoneNumber='$PhoneNumber', CGPA='$CGPA'  WHERE USN='$USN' ";
       $data = mysqli_query($conn, $query);
       if($data)
       {
           echo "<font color='green'>Recored updated Successfully!..<a href='viewstudent.php'>Check Updated List here</a>";
       }
       else
       {
           echo "<font color='red'>Record not updated. <a href='page14.php'>Check Updated List here</a>";
       }
    }
    else
    {
        echo "<font color='blue'>Click on Update Button to save the changes";
    }
?>
</form>
</div>
<div class="card-footer text right">
    <small>&copy;Campus System</small>
</div>
</div>
</div>
</div>
</body>
</html>                 