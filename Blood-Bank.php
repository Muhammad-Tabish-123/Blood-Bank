<?php include "header.php";
 $LinkId=$_GET['id'];

if($LinkId==1){
$conn= mysqli_connect("localhost","root","","bloodbankdb") or die("Connection failed");
$sql= "SELECT * FROM bloodstock";
$result= mysqli_query($conn,$sql) or die("Query failed");

if(mysqli_num_rows($result)>0){

?>
<div class="datatable">

	<table class="datatable" style="width: 50%;  margin-left: auto; margin-right: auto;  ">
		<caption><h1 style="color: white;">Blood Stock</h1></caption>
		<tr class="datatable">
			<th class="datatable"><h3>Blood Group</h3></th>
			<th class="datatable"><h3>Units</h3></th>
		</tr>
<?php 	while ($row=mysqli_fetch_assoc($result)) { ?>
		<tr class="datatable">
		<td class="datatable"><?php echo $row['BloodType']; ?></td>
		<td class="datatable"><?php echo $row['Units']; ?></td>
	</tr>
	<?php } ?>
	</table>
</div>
<?php }}

 else{
$conn2= mysqli_connect("localhost","root","","bloodbankdb") or die("Connection#2 failed");
$sql2= "SELECT * FROM donor JOIN bloodstock ON donor.dbid=bloodstock.bid";
$result2=mysqli_query($conn2,$sql2) or die("Query#2 Failed");
if(mysqli_num_rows($result2)>0){

   ?>

	<div class="datatable">

	<table class="datatable" style="width: 50%;  margin-left: auto; margin-right: auto;  ">
		<caption><h1 style="color: white;">Blood Stock</h1></caption>
		<tr class="datatable">
			<th class="datatable"><h3>Donor Name</h3></th>
			<th class="datatable"><h3>Blood Group</h3></th>
      <th class="datatable"><h3>Conatct Info</h3></th>
		</tr>
  <?php while ($row2=mysqli_fetch_assoc($result2)) {

   ?>
		<tr class="datatable">
		<td class="datatable"><?php echo $row2['donorname']; ?></td>
		<td class="datatable"><?php echo $row2['BloodType']; ?></td>
    <td class="datatable"><?php echo $row2['phon']; ?></td>
	    </tr>
<?php }} ?>

	</table>
</div>
<?php } ?>

<br><br>
<div>
	<nav>
		<table style="background-color: #333; margin-left: auto; margin-right: auto; border: none;">
		<tr >
		<td><a class="paginaton"  href="Blood-Bank.php?id=1">Blood Stock</a></td>
		<td><a class="paginaton" href="Blood-Bank.php?id=2">Donors</a></td>
	    </tr>
	</table>
	</nav>
</div>
<br><br>
<?php include "footer.php"; ?>
