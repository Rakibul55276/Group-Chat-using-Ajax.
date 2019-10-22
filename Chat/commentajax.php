
<?php
	include ('config.php');
	if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
//$query = "INSERT INTO user (regfullname, regusername, regpassword) VALUES ('$rf','$ru','$rp')";


  $qr="INSERT INTO comments (id,name,comment,post_time) VALUES(Null,'$name','$comment',CURRENT_TIMESTAMP)";

  $rest = mysqli_query($con,$qr) or die($con);
}
?>





