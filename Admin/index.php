<?php
session_start();
if(isset($_SESSION['username'])){

header("Location: http://localhost/BloodBank/admin/adminpannel.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logn</title>
</head>
<body style="background-color: #333; margin: 0px;">
	<div style="text-align: center; background-color: #333; color: white; margin-right: 10%; margin-left: 10%; padding: 100px;">
<h1>Login</h1>
<form action="<?php  $_SERVER['PHP_SELF'];  ?>" method="POST">
	Name:
	<input type="text" name="username"><br><br>
	Password:
	<input type="password" name="password"><br><br>
	<input type="submit" name="submit">
	<?php
if(isset($_POST['submit'])){
 $id=$_POST['username'];
  $password=$_POST['password'];
	$conn= mysqli_connect("localhost","root","","bloodbankdb") or die("Connection failed");
	$sql= "SELECT * FROM admin WHERE username='{$id}'";
	$result= mysqli_query($conn,$sql) or die("Query failed");
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);

		if($row['password']==$password){
      session_start();
			$_SESSION['username']= $row['username'];
			header("Location: http://localhost/BloodBank/admin/adminpannel.php");
		}else {
			echo "Incorrect Password";
		}
	}else {
		echo"User Name Not matched";
	}
  }
 ?>
</form>
</div>
</body>
</html>
