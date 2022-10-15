<?php
include("header.php");
error_reporting(0); 
session_start();
?>
<table class="signup-container mx-auto">
  
  <tr><th colspan="2" style="text-align: center;"><h1>Log In</h1></th></tr>
  <tr><td colspan="2" style="text-align: center;"> <p>Please enter credentials to login.</p></td></tr>
  <hr>
  <form method="post">
    <tr><td>   <label for="email"><b>Email</b></label></td>
    <td>
      <input type="text" placeholder="email" name="email"><br></td></tr>
      <tr><td>   <label for="password"><b>Password</b></label></td>
    <td><input type="text" placeholder="password" name="password"><br></td></tr>

    <tr><td colspan="2" style="text-align: center; padding-top: 10px;">  <input type="submit" value="Login" name="submit" class="btn btn-primary"> </td></tr>
  </form>
  </table>

  <?php
  if(isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `student` WHERE email='". $email."'  AND password='".$password."'";
    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    
    if($total==1){
      $result=mysqli_fetch_assoc($data);
      $username=$result['email'];
      $studentid=$result['stdid'];
      $hostelid=$result['hostelid'];
      echo "$username,$studentid";
      // echo 'login ok';
      $_SESSION['username']=$username;
      $_SESSION['studentid']=$studentid;
      header("location:student.php?un=$username&&sid=$studentid&&hid=$hostelid");
    }
    else{
      echo 'login failed';
      }
    }
    ?>

