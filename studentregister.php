<?php
include("header.php")
?>

<table class="signup-container mx-auto">
  
  <tr><th colspan="2" style="text-align: center;"> <h1>Sign Up</h1></th></tr>
  <tr><td colspan="2" style="text-align: center;"> <p>Please fill in this form to create an account.</p></td></tr>
  <hr>
  <form  style="border:1px solid #ccc" method="post">
    <tr><td>   <label for="name"><b>Full name</b></label></td>
    <td><input type="text" placeholder="enter name" name="name" required  ></td></tr>

    <tr><td> <label for="hostelid"><b>Hostel-id</b></label></td>
    <td>
    <input type="text" placeholder="enter hostel id" name="hostelid" required></td></tr>

    <tr><td> <label for="number"><b>mobile number</b></label></td>
    <td>
    <input type="text" placeholder="enter mobile number" name="number" required></td></tr>


    <tr><td>  <label for="email"><b>Email</b></label></td>
    <td>
    <input type="text" placeholder="Enter Email" name="email" required></td></tr>

    <tr><td> <label for="password"><b>Password</b></label></td>
    <td>
    <input type="password" placeholder="Enter Password" name="password" required></td></tr>

    <tr><td> <label for="psw-repeat"><b>Repeat Password</b></label></td>
    <td>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required></td></tr>


    
    <tr><td colspan="2" style="text-align: center; padding-top: 10px;"> 
        <input type="submit" value="Sign Up" name="submit" class="btn btn-primary" /></td></tr>
      
        <tr><td colspan="2" style="text-align: center;">    <p>already have an account <a href="studentlogin.php" style="color:dodgerblue">login</a>.</p></td></tr>
      </form>
</table>

<?php 
if(isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $hid=$_POST['hostelid'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $psw = $_POST['psw-repeat'];

  if($name != '' && $hid != '' && $number != '' && $email != '' && $password !='' && $password == $psw)
{
  $query = "INSERT INTO `student`( `name`, `hostelid`, `mnumber`, `email`, `password`, `confpassword`) VALUES ('$name', '$hid', '$number', '$email', '$password', '$psw')";
  $data = mysqli_query($conn,$query);

  if($data)
  {
   // echo " inserted student information";
   header ('location:studentlogin.php');
  }
  else
  {
    echo "Error inserting student"; 
   }
}
}
?>