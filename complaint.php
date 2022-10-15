<?php
include ("header.php");
session_start();
$user = $_GET['un'];
$stdid=$_GET['sid'];
$hostelid=$_GET['hid'];
$user1=$_SESSION['username'];
if ($user1 == true)
{

}
else{
    header("location:index.php");
}
?>
<table class="signup-container mx-auto">

<tr>
  <th colspan="2" style="text-align: center; padding-top:15px;">

  <h2>COMPLAINTS</h2>
  </th>
  </tr>
  <form method="post">
  <tr>
      <td style="text-align: right; padding-top:15px;">
            <label for="rmno">ENTER ROOM NO :</label></td>
      <td style="padding-top:15px; padding-left:5px;">
            <input type="text" id="rmno" name="rmno">
            </td>
    </tr>
        

    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;"> 
<label for="comment">   ANY OTHER COMPLAINT:</label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;">
<textarea class="form-control" rows="4" cols="80" id="query" name="text"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"></td>
    </tr>
</form>
</table>
<?php
if(isset($_POST['submit'])){
  $user = $_GET['un'];
$stdid=$_GET['sid'];
$hostelid=$_GET['hid'];
  $rmnumber=$_POST['rmno'];
  $text=$_POST['text'];

  if($rmnumber!="" && $text!="")
  {
  $query="INSERT INTO `complaint`(`hostelid`, `stdid`, `name`, `text`) VALUES ('".$hostelid."','".$stdid."','$rmnumber','$text')";
  $data=mysqli_query($conn,$query);
  if($data)
 {
   echo "Data inserted successfully.";
  
 }
 else
 {
   echo "Error inserting student"; 
  }

}
}


 ?>