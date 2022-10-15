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
  header("location:index.php");
}
?>
<table class="signup-container mx-auto">

  <tr>
    <th colspan="2" style="text-align: center; padding-top:15px;">

      <h2>CLEANING </h2>
    </th>
  </tr>

  <form method="post">

    <!-- <p>The <strong>input type="radio"</strong> defines a radio button:</p> -->
    <tr>
      <td style="text-align: right; padding-top:15px;">
        <label for="rmno">
          <!-- <?php echo "$user1"; ?> -->
          ENTER ROOM NO :
        </label>
      </td>
      <td style="padding-top:15px; padding-left:5px;">
        <input type="text" id="rmno" name="rmno">
      </td>
    </tr>



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>1: SWEEPING DONE</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;">
          <input type="radio" id="basin" name="r1" value="YES">
          <label for="basin">yes</label>
          <input type="radio" id="basin" name="r1" value="NO">
          <label for="basin">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>2: WASHROON CLEANED</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;">

          <input type="radio" id="shower" name="r2" value="YES">
          <label for="shower">yes</label>
          <input type="radio" id="shower" name="r2" value="NO">
          <label for="shower">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>3: WASH BASIN CLEANED</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;">

          <input type="radio" id="comode" name="r3" value="YES">
          <label for="comode">yes</label>
          <input type="radio" id="comode" name="r3" value="NO">
          <label for="comode">no</label></td>
    </tr>
     



    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;">
        <p>4: FLOOR WIPED</p>
      </td>
    </tr>
     <tr>
      <td colspan="2" style="text-align: center;">
          <input type="radio" id="other" name="r4" value="YES">
          <label for="other">yes</label>
          <input type="radio" id="other" name="r4" value="NO">
          <label for="other">no</label></td>
    </tr>
     

    <tr>
      <td colspan="2" style="text-align: center; padding-top:15px;"> <label for="comment">IN detail query:</label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><textarea class="form-control" rows="4" COLS="80" id="query"
          name="text"></textarea>
      </td>
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
  $sweeping = $_POST['r1'];
  $washroom = $_POST['r2'];
  $basin = $_POST['r3'];
  $floor = $_POST['r4'];
  $text = $_POST['text'];

  if ($rmnumber != "" && $sweeping != "" && $washroom != "" && $basin != "" && $floor != "") {
    $query = "INSERT INTO `cleaning` (`hostelid`, `stdid`, `rmnumber`, `sweeping`, `washroom`, `washbasin`, `floor`, `text`) VALUES ('" . $hostelid . "','" . $stdid . "','$rmnumber','$sweeping','$washroom','$basin','$floor','$text')";
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