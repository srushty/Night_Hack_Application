<!DOCTYPE HTML>
<html>
<head>
<title>user authentication</title>
</head>
<body>

<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
  email:<br>
  <input type="text" name="email"><br>
  <input type="button" name="button" onclick=enteruser()/>
</form>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";

$con = new mysqli($servername, $username, $password);


if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
function (){
	$email=$_GET('email');
	$query = mysql_query("SELECT email FROM Users WHERE email='$email'", $con);
	
	if (mysql_num_rows($query) != 0)
	{
		echo "Username already exists";
	}
	
	else
	{
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$emaila=$_POST['email'];
		
		$sqluserinput = "INSERT INTO user (firstname, lastname, email)
		VALUES ('$fname','$lname','$emaila')";
		
		if (mysql_query($con, $sqluserinput)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysql_error($con);
		}
		
		mysqli_close($conn);
	}
}



?>
</body></html>