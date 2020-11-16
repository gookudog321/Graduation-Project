<html>
<head>
<title>edit save</title>
</head>
<body>
<?php
require 'mysql/config.php';
$member_id = $_POST['member_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


$strSQL = "UPDATE member SET ";
$strSQL .="firstname = '".$_POST["firstname"]."' ";
$strSQL .=",lastname = '".$_POST["lastname"]."' ";
$strSQL .=",username = '".$_POST["username"]."' ";
$strSQL .=",password = '".$_POST["password"]."' ";
$strSQL .=",phone = '".$_POST["phone"]."' ";
$strSQL .=",email = '".$_POST["email"]."' ";
$strSQL .=",address = '".$_POST["address"]."' ";
$strSQL .="WHERE member_id = '".$_POST["member_id"]."' ";
$query = mysqli_query($conn,$strSQL);
if($query)
{
	echo "<script language=\"JavaScript\">";
		echo "alert('แก้ไขเสร็จสิ้น');";
		echo "location='memberedit.php' ";
		echo "</script>";
}else
{
	printf("Error: %s\n", $conn->error);
	exit();
}
mysql_close($strSQL);
?>
</body>
</html>