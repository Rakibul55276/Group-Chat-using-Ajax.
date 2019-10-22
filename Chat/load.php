<?php		
include("config.php");
//session_start();

  $name="";
$comment="";
 $time="";
$comm = '';
$comm ="select name,comment,post_time from comments";
//$comm = "SELECT * FROM comments WHERE name='".$name."', comment='".$comment."',post_time = '".$time."' ";

$result = mysqli_query($con,$comm)or die( mysqli_error($con));


//$comm = mysqli_query("select name,comment,post_time from comments");



while($row=mysqli_fetch_array($result)){
  $name=$row['name'];
  $comment=$row['comment'];
    $time=$row['post_time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>