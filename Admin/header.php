<?php
session_start();
if(!isset($_SESSION['username'])) {
header("Location: http://localhost/BloodBank/admin/");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood Bank</title>
	<style type="text/css">
		ul#nav {
			list-style-type: none;
			 overflow: auto;
			background-color: #333;
			padding: 0px;
			margin: 0px;
		}
		li {
			float: left;
		}
        a#nav{
        	display: block;
           color: white;
           text-align: center;
           padding: 14px 16px;
           text-decoration: none;

        }

		a#nav:hover{
                  background-color: #111;
		}

		table.datatable, th.datatable, tr.datatable, td.datatable {
			color: #111;
			border: 2px solid white;
			border-collapse: collapse;
			text-align: center;
			padding: 15px;
		}

		 tr.datatable{
			background-color: #dddddd ;
		 }



					a.paginaton{
						background-color: #333;
						display: block;
						 color: white;
						 text-align: center;
						 padding: 14px 16px;
						 text-decoration: none;
					}

			a.paginaton:hover{
										background-color: #111;
			}

	</style>
</head>
<body style="background-color: darkgray;">


<a href="http://localhost/BloodBank/admin/adminpannel.php" style="text-decoration: none;" ><h1  style="background-color: #333 ; color: white;  margin: 0px; padding: 14px 16px; text-align: center;" >
  Admin Pannel</h1></a>
<ul id="nav">
	<li><a id="nav" href="Add Donor.php">Add Donor</a></li>
  	<li><a id="nav" href="EditDonor.php">Edit Donors</a></li>
	<li><a id="nav" href="Blood-Bank-Mangement.php">Blood Bank Mangement</a></li>
  <li><a id="nav" href="LogOut.php">Log Out</a></li>
</ul>
</body>
</html>
