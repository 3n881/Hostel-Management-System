<?php
include ("header.php");


$user=$_GET['un'];
$hostelid=$_GET['hid'];
$hostel=$_GET['hn'];
// $user=$_SESSION['username'];
// $hostel=$_SESSION['hostelname'];
// $hostelid=$_SESSION['hostelid'];
if ($user == true)
{

}
else{
    header("location:index.php"); 
}
?>
<table style=" border: 3px solid black;">
<tr>
    <th>HostelID</th>
    <th>StudentID</th>
    <th>R.NO</th>
    <th>Complaint</th>
    <th>Delete</th>

    </tr>

    <?php
    $user=$_GET['un'];
    $hostelid=$_GET['hid'];
    $hostel=$_GET['hn'];
    $query="SELECT * FROM `complaint` WHERE hostelid ='".$hostelid."'";
    $data= mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    if($total!=0){
        while($result=mysqli_fetch_assoc($data)){
            echo "<tr>
            <td align='center'>".$result['hostelid']."</td>
            <td align='center'>".$result['stdid']."</td>
                <td align='center'>".$result['rmnumber']."</td>
                <td align='center'>".$result['text']."</td>
                <td><a href='complaintdelete.php?en=$result[entryno]'>Delete</a></td>

                </tr>";
                }
                }
                else{
                    echo "No Records found";
                }

?>