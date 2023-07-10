
<?php
include("Config.php");

$Sql = "Select * From  emp_tb";
$result = mysqli_query($Conn,$Sql);
?>

<?php
if (mysqli_num_rows($result) > 0){   
?>

<table border="1px solid black" width="50%" cellpadding="0px" cellspacing="0px" style= "border-collapse: collapse; margin-top:50px"  align="center">
    
<tr>
<th>Id</th>
<th>Name</th>
<th>Country</th>
<th>Salary</th>
<th>Email</th>
<th>Gender</th>
<th>Delete </th>
<th>Edit</th>
</tr>


<?php
while($data = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $data['Id'] ?></td>
<td><?php echo $data['Name'] ?></td>
<td><?php echo $data['Country'] ?></td>
<td><?php echo $data['Salary'] ?></td>
<td><?php echo $data['Email'] ?></td>
<td><?php echo $data['Gender'] ?></td>

<td><a href="deleteRecords.php?Id=<?php echo urlencode($data['Id']) ?>">Delete</a></td>
<td><a href="EditRecords.php?Id=<?php echo urlencode($data['Id']) ?>">Edit</a></td>





<?php } ?>

</table>

<?php } ?>
 
