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
    header("location:studentlogin.php");
}
?>
    <main>
        <div class=""> <h1> Welcome <?php echo "$user";?></h1></div>
       
        <table class="signup-container mx-auto">
        <tr><td  style="padding: 15px;"><h2><a href="plumbing.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">Plumbing</a></h2></td>
        <td  style=" padding: 15px;"><h2><a href="cleaning.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">Cleaning</a></h2></td>
        <td  style=" padding: 15px;"><h2><a href="electrical.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">Electrical</a></h2></td></tr>
        <tr><td  style=" padding: 15px;"><h2><a href="complaint.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">Complaints</a></h2></td>
        <td  style=" padding: 15px;"><h2><a href="profile.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">Profile</a></h2></td></tr>

</table>

</main>
   
    <!-- <?php
include ("footer.php");
?> -->