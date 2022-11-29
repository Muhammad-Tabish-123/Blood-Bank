<?php include "header.php";

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
      <th class="datatable"><h3>Action</h3></th>
		</tr>
<?php 	while ($row=mysqli_fetch_assoc($result)) { ?>
		<tr class="datatable">
		<td class="datatable"><?php echo $row['BloodType']; ?></td>
		<td class="datatable"><?php echo $row['Units']; ?></td>
    <td class="datatable"><a style="text-decoration: none; color:green; "  href="BloodUntsEdit.php?id=<?php echo $row['bid']; ?>">Edit</a> </td>
	</tr>
	<?php } ?>
	</table>
</div>
<?php } ?>
