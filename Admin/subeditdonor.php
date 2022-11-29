<?php include "header.php"; ?>
<?php
$donorid=$_GET['id'];
$conn1=mysqli_connect("localhost","root","","bloodbankdb") or die("Connecto#1 error");
$sql1="SELECT * FROM bloodstock ";
$result1=mysqli_query($conn1,$sql1) or die("Query#1 error");
//$row2=mysqli_fetch_assoc($result1);

$sql2= "SELECT * FROM donor JOIN bloodstock ON donor.dbid=bloodstock.bid WHERE donorid={$donorid}";
$result2=mysqli_query($conn1,$sql2) or die("Query#2 error");
if (mysqli_num_rows($result2)>0) {
while ($row2=mysqli_fetch_assoc($result2)) {

?>
<div style="text-align: center; background-color: #333; color: white; margin-right: 10%; margin-left: 10%; margin-top: 5%; padding: 100px;">
	<h1>Edit Donors</h1>
		<form action="<?php  $_SERVER['PHP_SELF'];  ?>" method="POST">
		Name:
		<input type="text" name="name" value="<?php echo $row2['donorname'] ; ?>"><br><br>
		Blood Group:
		<select name="bid">
			<?php
      if(mysqli_num_rows($result1)>0){

			while($row1=mysqli_fetch_assoc($result1 )){
        $select;
        if($row1['bid']==$row2['dbid'])
          $select="selected";
          else
            $select="";
				?>
			<option <?php echo $select; ?> value="<?php echo $row1['bid'];  ?>"><?php echo $row1['BloodType'];  ?></option>
		<?php
	 }
	}
		?>
		</select><br><br>
		Conatct info:
		<input type="text" name="phon" value="<?php echo $row2['phon'] ; ?>"><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
if(isset($_POST['submit'])){
	$Name=$_POST['name'];
	$bid=$_POST['bid'];
	$phon=$_POST['phon'];


   $sql3="UPDATE donor SET donorname='{$Name}' ,dbid={$bid} ,phon='{$phon}' WHERE donorid={$donorid} ";
  die();
	$result3=mysqli_query($conn1,$sql3) or die("Query#3 error");

	header("Location: http://localhost/BloodBank/admin/EditDonor.php");
}
}}?>
</div>
