<?php include "header.php";

$bid=$_GET['id'];
$conn= mysqli_connect("localhost","root","","bloodbankdb") or die("Connection failed");
$sql= "SELECT * FROM bloodstock WHERE bid={$bid}";
$result= mysqli_query($conn,$sql) or die("Query failed");

if(mysqli_num_rows($result)>0){
?>
<div style="text-align: center; background-color: #333; color: white; margin-right: 10%; margin-left: 10%; margin-top: 5%; padding: 100px;">

<form action="<?php  $_SERVER['PHP_SELF'];  ?>" method="POST">
<?php while ($row=mysqli_fetch_assoc($result)) { ?>
<?php echo $row['BloodType'];  ?>
  :
<input type="text" name="units" value="<?php echo $row['Units'] ; ?>"><br><br>
<input type="submit" name="submit" ><br><br>
<?php } ?>
</form>

<?php


if(isset($_POST['submit'])){
$units= $_POST['units'];
$sql2="UPDATE bloodstock SET Units={$units} WHERE bid={$bid}" ;
mysqli_query($conn,$sql2) or die("Query failed");
mysqli_close($conn);
header("Location: http://localhost/BloodBank/admin/Blood-Bank-Mangement.php");
?>
</div>

<?php }

}

?>
