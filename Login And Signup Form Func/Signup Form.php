<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
.Signup_Box{
    height: 549px;
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
.Signupbtn{
    background-color: rgb(23, 23, 143);
    color: white;
    font-size: 18px;
    border: 1px solid rgb(191, 186, 204);  
    width:500px;
    height:40px;
    cursor:pointer;    
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
<title>Signup Form</title>
</head>
<body>
<div class = "Box Signup_Box">
<h1>Signup Form</h1>

<div class="Section">
<div class = "Section_column1 cursor" onclick="myfunc()">Login</div>
<div class = "Section_column2 Sgn_And_Lgn">Signup</div>
</div>

<form method = "post">
<div class = "input">
<input type="text" name = "name" placeholder="Name">
</div>
<div class = "input">
<input type="text" name = "phone" placeholder="Phone Number">
</div>
<div class = "input">
<input type="Email" name = "email" placeholder="Email" >
</div>
<div class = "input">
<input type="password"  name = "pass" placeholder="Password" autocomplete = "new-password">
</div>
<div class = "input">
<input type="password"  name = "Confirmpass" placeholder="Confirm Password">
</div>
<div class = "input">
<input type="Submit" value = "Signup" name = "Submit_btn"  class = "Signupbtn">
</div>
</form>
</div> 
<script>
function myfunc(){
var location = window.location = "Login Form.php";
}
</script>
</body>
</html>

<?php
if (isset($_POST['Submit_btn'])){
$Pass = $_POST['pass'];
$Confirmpass = $_POST['Confirmpass'];
if($Pass == $Confirmpass){
$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Pass = $_POST['pass'];
$Sql = "Insert INTO registration_tb(Username,Phone,Email,Password) Values ('$Name','$Phone','$Email','$Pass')";
$Result = mysqli_query($Database_Connection,$Sql);
if($Result){
header("Location: dashboard.php");
}
}
else{
    echo "Please Confirm Your Password";
}
}
?>