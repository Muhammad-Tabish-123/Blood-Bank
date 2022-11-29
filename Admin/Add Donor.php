<?php include "header.php";
$conn1=mysqli_connect("localhost","root","","bloodbankdb") or die("Connecto#1 error");
$sql1="SELECT * FROM bloodstock";
$result1=mysqli_query($conn1,$sql1) or die("Query#1 error");
//$row2=mysqli_fetch_assoc($result1);

?>
<div style="text-align: center; background-color: #333; color: white; margin-right: 10%; margin-left: 10%; margin-top: 5%; padding: 100px;">
	<h1>Add Donors</h1>
		<form action="<?php  $_SERVER['PHP_SELF'];  ?>" method="POST">
		Name:
		<input type="text" name="name"><br><br>
		Blood Group:
		<select name="bid">
			<?php
      if(mysqli_num_rows($result1)>0){

			while($row1=mysqli_fetch_assoc($result1 )){
				?>
			<option value="<?php echo $row1['bid'];  ?>"><?php echo $row1['BloodType'];  ?></option>
		<?php
	 }
	}
		?>
		</select><br><br>
		Conatct info:
		<input type="text" name="phon"><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
if(isset($_POST['submit'])){
	$Name=$_POST['name'];
	$bid=$_POST['bid'];
	$phon=$_POST['phon'];

	$conn2=mysqli_connect("localhost","root","","bloodbankdb") or die("Connecto#2 error");
  $sql2="INSERT INTO donor (donorname,dbid,phon) VALUES ('{$Name}',{$bid},'{$phon}')";
	$result2=mysqli_query($conn2,$sql2) or die("Query#2 error");

	header("Location: http://localhost/BloodBank/admin/");
}
	 ?>
</div>
