<?php
include("config.php");
session_start();

$uName = $_POST['username'];
$pWord = $_POST['password'];

$qry = "SELECT * FROM user WHERE regusername='".$uName."' and regpassword='".$pWord."'";

  //$seeker_check_query = "SELECT * FROM seekers WHERE username='$username' OR email='$email' LIMIT 1";

  $result = mysqli_query($con, $qry);
  $num_row = mysqli_num_rows($result);
  $fetch = mysqli_fetch_assoc($result);
  


//$res = mysqli_query($qry);
//$num_row = mysqli_num_rows($res);
//$row=mysqli_fetch_assoc($res);

if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['regusername'] = $uName;
	header('location:chat.php');
}
else {
	echo 'false';
}
?>