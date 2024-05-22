<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

include("../conn.php");
if(isset($_REQUEST["eupd"]))
{
	if($_FILES["photo"]["name"]=="")
		$path=$_REQUEST["old_img"];
	else
	{
		$path="../upload/".$_FILES["photo"]["name"]; 
		move_uploaded_file($_FILES["photo"]["tmp_name"],"../".$path);
		unlink("../".$_REQUEST["old_img"]);
	}
	mysqli_query($con,"update event set ename='".$_REQUEST["name"]."',edate='".$_REQUEST["date"]."',evenue='".$_REQUEST["venue"]."',etime='".$_REQUEST["time"]."',ephoto='".$path."' where eid=".$_REQUEST["eid"]);
	echo "<script>window.location='eventview.php';</script>";
	
}
}	
	else
		echo "<script>window.location='alogin.php';</script>";

?>