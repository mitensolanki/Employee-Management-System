<?php
include('conn.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query=mysql_query("delete from emp_details where EmpId='$id'");
if($query)
{
header('location:index.php');
}
}
?>
