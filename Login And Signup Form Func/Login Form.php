<?php
if(isset($_SESSION['Email'])){
    header('Location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
    margin: 0px auto;
    padding: 0px auto;
}
body{
    background-color: rgb(23, 23, 143);
}
.Box{
    width:600px;
    background-color: white;
    border:1px solid green;
    border-radius: 10px;
    margin-top: 30px;
}
.Login_Box{
    height: 450px;
}
.Box h1{
    color: black;
    text-align: center;
    margin-top: 15px;   
}
.Section{
    width: 500px;
    height: 40px;
    border : 1px solid rgb(191, 186, 204);
    border-radius:10px;
    margin-top: 30px;
    display: flex; 
    margin-bottom: 10px;
}
.Section_column1{
     width:250px;
     height: 40px;
     margin-left: 0px;
     display: flex;
     justify-content: center;
     align-items: center;
}
.cursor{
    cursor: pointer;
}
.Section_column2{
    width:250px;
    margin-left: 0px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.Sgn_And_Lgn{
    background-color:  rgb(23, 23, 143);
    color: white;
    border-radius: 10px;

}
.input{
      width: 500px;
      height: 40px;
      border-radius: 10px;
      margin-top: 20px;

}
input{
      margin-top: 10px;
      width: 494px;
      height: 36px;
      border: 1px solid rgb(191, 186, 204);  
      border-radius: 10px; 
}
input::placeholder {
    color: rgb(191, 186, 204);
    font-size: 18px;
    padding-left: 20px;
}
.Loginbtn{
    background-color: rgb(23, 23, 143);
    color: white;
    font-size: 18px;
    border: 1px solid rgb(191, 186, 204);  
    width:500px;
    height:40px;
    cursor:pointer;
    margin-top: 40px;
    margin-bottom: 40px;
}
.Box_p{
     margin-top: 80px;
     text-align: center;
}
.Box_p_a{
    text-decoration: none;
    color: blue;
}


</style>
<title>Login Form</title>
</head>
<body>
<div class = "Box Login_Box">
<h1>Login Form</h1>
<div class="Section">
<div class = "Section_column1 Sgn_And_Lgn">Login</div>
<div class = "Section_column2 cursor" onclick="myfunc()">Signup</div>
</div>
<form method = "post">
<div class = "input">
<input type="email" name = "email" placeholder="Email Address">
</div>
<div class = "input">
<input type="password" name = "pass" placeholder="Password" autocomplete = "new-password">
</div>
<div class = "input">
<input type="Submit" value = "Login" name = "Submit_btn" class = "Loginbtn">
</div>
<p class = "Box_p">Now a member? <a class="Box_p_a" href = "Signup Form.php">Signup now</span></p>
</form>
</div> 
<script>
function myfunc(){
var location = window.location = "Signup Form.php";
}
</script>
</body>
</html>

<?php

session_start();
include 'db.php';

if (isset($_POST['Submit_btn']))
{
	$Email = $_POST['email'];
	$Password = $_POST['pass'];
	$Sql = "select * from registration_tb  where Email = '$Email' and Password = '$Password'";	
	$query_run = mysqli_query($Database_Connection,$Sql);
	$totalrow = mysqli_num_rows($query_run);
	
	if($totalrow == 1) {
        $_SESSION['Email'] = $Email;
        header('Location: dashboard.php');
        exit(); // Stop further execution
    }
    
		else
		{
			echo"<h2 style = text-align:center;color:red;margin-top:10px;>Your Username And Password Not Matched by Our Records</h2>";
			}	
	}
?>