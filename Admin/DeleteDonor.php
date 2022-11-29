<?php include "header.php";
$donorid=$_GET['id'];
$conn1=mysqli_connect("localhost","root","","bloodbankdb") or die("Connecto#1 error");
$sql1="DELETE  FROM donor WHERE donorid={$donorid} ";
$result1=mysqli_query($conn1,$sql1) or die("Query#1 error");

header("Location: http://localhost/BloodBank/admin/EditDonor.php");
?>
