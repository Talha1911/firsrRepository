<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('Config.php');
if (isset($_GET['Id'])) {
$Id = $_GET['Id'];

$Sql = "DELETE FROM emp_tb WHERE Id = '$Id'";

$result = mysqli_query($Conn, $Sql);
if ($result) {
header('Location:viewrecords.php');
}

}
?>

</body>
</html>