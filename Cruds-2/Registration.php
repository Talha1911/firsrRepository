<!DOCTYPE html>
<html>
<head>
<style>
      *{
            margin: 0px auto;
      }

.header{
         width: 1440px;
         height: 80px;
         background-color: black;
}
.section{
          width:100%;
          height: 597px;
          background-image: url("Images/images.jpg");
          background-repeat: no-repeat;
          background-position: fixed;
          background-size: 100% 597px ;
          
}
.box{
      width:460px;
      height: 470px;
      border-radius: 30px;
      background-color: rgba(20,50,128,0.6);
      position: fixed;
      margin-top: 50px;
      margin-left: 495px;


}

.box h2{
                   color:white;
                   margin-top: 0px;
                   padding: 6px;
                   text-align: center;
                   background-color: orange;
                   border-top-right-radius: 20px;
                   border-top-left-radius: 20px;
                   margin-bottom: 15px;
}
.box label{
            color:white;
            font-size: 15px;
            margin-left: 21px;

}
.box input[type = text]{
            margin-left: 20px;
            width: 410px;
            height:25px;
            margin-top: 5px;
            margin-bottom: 15px;
}
.box input[type = num]{
            margin-left: 20px;
            width: 410px;
            height:25px;
            margin-top:5px;
            margin-bottom: 15px;
}
.box input[type = email]{
            margin-left: 20px;
            width: 410px;
            height:25px;
            margin-top:5px;
            margin-bottom: 15px;
}
.box input[type = radio]{
            margin-left: 20px;
            margin-bottom: 20px;

}
.label{
        color:white;

        
}
.box input[type = submit]{
            margin-left: 20px;
            width: 418px;
            height:35px;
            margin-bottom: 15px;
            background-color: navy;
            color:white;
            border: none;
}
.footer{
          width:100%;
          height:80px;
          background-color: black;
}


</style>
</head>
<body>
<div class="header"></div>
<div class="section">
<div class = "box">   
<h2>Employees Registration form</h2>
<form action="" method="post">
<label>NAME* :</label>
<input type="text" name ="name" placeholder="Enter Employee Name">
<label>COUNTRY* :</label>
<input type="text" name ="country" placeholder="Enter Employee Country">
<label>SALARY* : </label>
<input type="num" name ="salary" placeholder="Enter Employee Salary">
<label>EMAIL* : </label>
<input type="email" name ="email" placeholder="Enter Employee Email">
<label>GENDER* : </label>
<input type="text" name ="gender" placeholder="Enter Employee Gender">
<input type="submit" value="SUBMIT" name = "btnsubmit" >
</form>
</div>
</div>
<div class= "footer"></div>
</body>
</html>

<?php
include("Config.php");
if(isset($_POST["btnsubmit"])){
$Name = $_POST["name"];
$Country = $_POST["country"];
$Salary = $_POST["salary"];
$Email = $_POST["email"];
$Gender = $_POST["gender"];

$Sql = "Insert into emp_tb(Name,Country,Salary,Email,Gender) Values('$Name','$Country','$Salary','$Email','$Gender')";
$result = mysqli_query($Conn,$Sql);

if($result){
header("Location:viewrecords.php");
exit;
}

}
?>