<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

include("../conn.php");
if(isset($_REQUEST["cat_upd"]))
{
	/*if($_FILES["img"]["name"]=="")
		$path=$_REQUEST["old_img"];
	else
	{
		$path="upload/".$_FILES["img"]["name"]; 
		move_uploaded_file($_FILES["img"]["tmp_name"],"../".$path);
		unlink("../".$_REQUEST["old_img"]);
	}*/
	mysqli_query($con,"update category set cat_name='".$_REQUEST["name"]."' where cat_id=".$_REQUEST["catid"]);
	echo "<script>window.location='categoryview.php';</script>";
}
}	
	else
		echo "<script>window.location='alogin.php';</script>";

?>