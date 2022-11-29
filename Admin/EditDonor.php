<?php include "header.php"; ?>

<?php


$conn2= mysqli_connect("localhost","root","","bloodbankdb") or die("Connection#2 failed");
$sql2= "SELECT * FROM donor JOIN bloodstock ON donor.dbid=bloodstock.bid ORDER BY bid";
$result2=mysqli_query($conn2,$sql2) or die("Query#2 Failed");
if(mysqli_num_rows($result2)>0){

   ?>

	<div class="datatable">

	<table class="datatable" style="width: 50%;  margin-left: auto; margin-right: auto;  ">
		<caption><h1 style="color: white;">Donors</h1></caption>
		<tr class="datatable">
			<th class="datatable"><h3>Donor Name</h3></th>
			<th class="datatable"><h3>Blood Group</h3></th>
      <th class="datatable"><h3>Conatct Info</h3></th>
      <th class="datatable" colspan="2"><h3>Acton</h3></th>
		</tr>
  <?php while ($row2=mysqli_fetch_assoc($result2)) {

   ?>
		<tr class="datatable">
		<td class="datatable"><?php echo $row2['donorname']; ?></td>
		<td class="datatable"><?php echo $row2['BloodType']; ?></td>
    <td class="datatable"><?php echo $row2['phon']; ?></td>
    <td class="datatable"><a style="text-decoration: none; color:green; "  href="subeditdonor.php?id=<?php echo $row2['donorid']; ?>">Edit</a> </td>
    <td class="datatable"><a style="text-decoration: none; color:red; " href="DeleteDonor.php?id=<?php echo $row2['donorid']; ?>">Delete</a></td>

	    </tr>
<?php }} ?>

	</table>
</div>

<br><br>
