<?php
$con = mysqli_connect("localhost:3308", "root", "", "lifestylestore")or die($mysqli_error($con));
if(!isset($_SESSION['email']))
{
	session_start();
}
error_reporting(0);
?>
