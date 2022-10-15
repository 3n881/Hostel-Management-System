<?php
include("header.php");
session_start();

$user = $_GET['un'];
$stdid = $_GET['sid'];
$hostelid = $_GET['hid'];
$user1 = $_SESSION['username'];
if ($user1 == true) {

}
else {
  header("location:studentlogin.php");
}
?>

<table class="signup-container mx-auto">

  <tr>
    <th colspan="2" style="text-align: center; padding-top:15px;">
      <h2>PLUMBING </h2>
    </th>
  </tr>

  <!-- <p>The <strong>input type="radio"</strong> defines a radio button:</p> -->
  <form method="post">

    <tr>
      <td style="text-align: right; padding-top:15px;"> <label for="rmno">ENTER ROOM NO :</label></td>
      <td style="padding-top:15px; padding-left:5px;">
        <input type="text" id="rmno" name="rmno">
      </td>
    </tr>




    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>WASH BASIN LEAKING</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;"> <input type="radio" id="basin" name="r1" value="YES">
          <label for="basin">yes</label>
          <input type="radio" id="basin" name="r1" value="NO">
          <label for="basin">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>SHOWER LEAKING</p>
      </td>
    </tr>

    <tr>
      <td colspan="2" style="text-align: center;"> <input type="radio" id="shower" name="r2" value="YES">
          <label for="shower">yes</label>
          <input type="radio" id="shower" name="r2" value="NO">
          <label for="shower">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>COMODE LEAKING</p>
      </td>
    </tr>

     <tr>
      <td colspan="2" style="text-align: center;"> <input type="radio" id="comode" name="r3" value="YES">
          <label for="comode">yes</label>
          <input type="radio" id="comode" name="r3" value="NO">
          <label for="comode">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>ANY OTHER LEAKAGE</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;"> <input type="radio" id="other" name="r4" value="YES">
          <label for="other">yes</label>
          <input type="radio" id="other" name="r4" value="NO">
          <label for="other">no</label></td>
    </tr>
     

    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;"> <label for="comment">IN detail query:</label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><textarea class="form-control" rows="4" COLS="80" id="query"
          name="text"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;"> <input type="submit" value="Submit" name="submit"
          class="btn btn-primary"></td>
    </tr>
  </form>

</table>
<?php
if (isset($_POST['submit'])) {
  $user = $_GET['un'];
  $stdid = $_GET['sid'];
  $hostelid = $_GET['hid'];
  $rmnumber = $_POST['rmno'];
  $basin = $_POST['r1'];
  $shower = $_POST['r2'];
  $comode = $_POST['r3'];
  $any_other = $_POST['r4'];
  $text = $_POST['text'];

  if ($rmnumber != "" && $basin != "" && $shower != "" && $comode != "" && $any_other != "") {
    $query = "INSERT INTO `plumbing`(`hostelid`, `stdid`, `rmnumber`, `washbasin`, `shower`, `comode`, `anyother`, `text`) VALUES ('" . $hostelid . "','" . $stdid . "','$rmnumber','$basin','$shower','$comode','$any_other','$text')";
    $data = mysqli_query($conn, $query);
    if ($data) {
      echo "Data inserted successfully.";

    }
    else {
      echo "Error inserting student";
    }

  }
}


?>