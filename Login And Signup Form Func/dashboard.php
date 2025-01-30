<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
    margin: 0px;
}
body{
    background-color: rgb(23, 23, 143);
}
/* header */

.header{                             
    margin: 0px auto;
    width: 100%;
    height: 85px;
    background-color: rgb(82, 185, 82);
    color:white;
}
.nav{
    width: 90%;
    height: 85px;
    margin: 0px auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.nav_heading{
    width: 170px;
    height: 85px;
    margin: 0px;
    display: flex;
    align-items: center;
}
.nav_heading h1{
    font-family: Arial;
}
.nav_menu{
    width: 300px;
    height: 20px;
}
.nav_menu ul{
    list-style-type: none;
    display: flex;
    justify-content: space-between;

 
}
.nav ul li{
    font-size: 18px;
    font-family:Helvetica,bold;
}
.nav_menu ul li a{
    text-decoration: none;
    color: white;
}

/* Section */
.section{
width:100%;
height: 490px;
display: flex;
}
.section_column1{
    width:280px;
    background-color: rgb(58, 49, 49);
}
.section_column1 h1{
color:white;
font-family: Arial;
margin-left: 30px;
margin-top: 15px;
margin-bottom: 40px;
}

.section_column1 ul{
list-style: none;
margin-left: -10px;
}
.section_column1 ul li{
font-size: 18px;
font-family:Helvetica,bold;
margin-bottom: 20px;
}
.section_column1 ul li a{
text-decoration: none;
color:White;
}
.section_column1 ul li a:hover{
color: rgb(82, 185, 82);;
}
.section_column2{
    width:1088px;
}
.section_column2_box{
width: 720px;
height: 120px;
background-color: white;
margin: auto;
border-radius: 10px;
margin-bottom: 20px;
}
.Scb{
    margin-top: 40px;
}
.section_column2_box h1{
font-family: Arial;
margin-left: 30px;
padding-top: 20px;
}
.section_column2_box p{
font-family: Helvetica,bold;
font-size: 18px;
margin-left: 30px;
padding-top: 17px;

}
.footer{
width:100%;
height: 85px;
background-color: rgb(82, 185, 82);
display: flex;
justify-content: center;
align-items: center;
}
.footer p{
font-family: Helvetica,bold;
font-size: 18px;
color:white
}
</style>
<link rel="stylesheet" href="style.css">
<title>Dashboard</title>
</head>
<body>
<div class="header">
<div class="nav">
<div class="nav_heading">
<h1>Dashboard</h1>
</div>
<div class="nav_menu">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Profile</a></li>
<li><a href="#">Logout</a></li>
</ul>
</div>
</div>
</div>

<div class="section">
<div class="section_column1"> 
<h1>Menu</h1> 
<ul>
<li><a href="#">Dashboard</a></li>
<li><a href="#">Settings</a></li>
<li><a href="#">Reports</a></li>
<li><a href="#">Help</a></li>
</ul> 
</div>

<div class="section_column2">  
<div class="section_column2_box Scb">
<h1>Welcome to the Dashboard</h1>
<p>This is your main dashboard where you can see an overview of your application.</p>
</div>
<div class="section_column2_box">
<h1>Statistics</h1>
<p>View your statistics and performance here.</p>
</div>
<div class="section_column2_box">
<h1>Updates</h1>
<p>Stay updated with the latest news and changes.</p>
</div>
</div>

</div>


<div class="footer">
<p>&copy; 2025 Dashboard All rights reserved.</p>
</div>
</body>
</html>