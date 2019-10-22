<!DOCTYPE html>
<html>
<title>Login Form</title>
<head>
<?php
include('config.php');

$rf="";
$ru="";
$rp="";


  if (isset($_REQUEST["newreg"]))
  {

 //$username = "";


        $rf=$_POST["reg_fullname"];
      $ru=$_POST["reg_username"];
      $rp=$_POST["reg_password"];
      //$user = "";
      //$message = '';
     //$username="";

  //$rf = mysqli_real_escape_string($con, $_POST['reg_fullname']);
    //$ru = mysqli_real_escape_string($con, $_POST['reg_username']);
  //$rp = mysqli_real_escape_string($con, $_POST['reg_password']);
    //$email = mysqli_real_escape_string($con, $_POST['email']);
//if (empty($rf)) { array_push($errors, "Name is required"); }
  //if (empty($ru)) { array_push($errors, "Username is required"); }
  //if (empty($rp)) { array_push($errors, "Password is required"); }


$check_query = "SELECT * FROM user WHERE regusername ='$ru' ";
  $result = mysqli_query($con, $check_query);
  //$count = mysqli_num_rows($result);

// if user exists}
if (mysqli_num_rows($result) > 0) 
           {
 ?>         
            <script>
                    alert('Username already exists!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
            }

else
    {

$query = "INSERT INTO user (id,regfullname, regusername, regpassword) 
              VALUES (Null,'$rf','$ru','$rp')";
//$res = mysqli_query($con, $check_query);
   
   $res = mysqli_query($con, $query);


 ?>         
            <script>
                    alert('You are ready to log in')
                        window.location='index.php?menu=login'
            </script>
  
<?php  

}
exit();
  }
?>
<style>
body {
    background: url('1.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.login-block {
    width: 320px;
    padding: 20px;
    border-radius: 5px;
    margin: 110px auto;
	background:#fff;
    border-top: 5px solid #ff656c;
}

.fullname,.username,.password{
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.fullname {
    background: #fff url('5.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.fullname:focus {
    background: #fff url('5.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.username {
    background: #fff url('4.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.username:focus {
    background: #fff url('4.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.password {
    background: #fff url('3.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.password:focus {
    background: #fff url('3.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}
.login:hover {
    background: #ff7b81;
}

.logo{width:120px; height:120px; margin:auto; border:5px solid #fff; border-radius:50%; margin-bottom:20px;}
.logo img{width:100%; height:100%; border-radius:50%} 
#hide,#show{cursor:pointer}
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
	$(".register-box").hide();    
    $("#show").click(function(){
		$(".login-box").hide();
        $(".register-box").fadeIn(200);
    });
	$("#hide").click(function(){
		$(".login-box").fadeIn(200);
        $(".register-box").hide();
    });
});
</script>
</head>
<body>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="login-block login-box">
    <div class="logo">
    	<img src="22.png"/>
    </div>
    <form action="check-login.php" method="post">
	    <input type="text" placeholder="Username" id="username" name="username" class="username"/>
	    <input type="password" placeholder="Password" id="password" name="password" class="password"/>
	    <input type="submit" value="Log In" id="loginbutton" name="loginbutton" class="login"/>
    </form>
    <p style="text-align:center; font-size:14px">Not registered ? <strong style="color:#ff656c" id="show" >Create an account</strong></p>
</div>
<div class="login-block register-box">
    <div class="logo">
    	<img src="21.png"/>
    </div>
	<form action="" method="post">    
	    <input type="text" placeholder="Full Name" id="reg_fullname" name="reg_fullname" class="fullname" required/>
    	<input type="text" placeholder="Username" id="reg_username" name="reg_username" class="username" required/>
	    <input type="password" placeholder="Password" id="reg_password" name="reg_password" class="password" required/>
		<input type="submit" value="Register" id="newreg" name="newreg" class="login"/>
	</form>
    <p style="text-align:center; font-size:14px">Have an account ? <strong style="color:#08C400" id="hide">Sign In</strong></p>


</div>
</body>
</html>
