<?php
session_start();
include "../conn.php";
if(isset($_REQUEST["login"]))
{
	$getuser=mysqli_query($con,"select * from login where unm='".$_REQUEST["unm"]."' AND pass='".$_REQUEST["pass"]."'");
	$res=mysqli_fetch_row($getuser);
	$nores=mysqli_num_rows($getuser);
	if($nores>0)
	{
		$_SESSION["ad_session"]=$res[1];
		echo "<script>window.location='index.php';</script>";
	}	
	else
		echo "<script>window.location='alogin.php';</script>";
}
else
	echo "<script>window.location='alogin.php';</script>";
?>