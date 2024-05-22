<?php
session_start();
if(isset($_SESSION["ad_session"]))
{
	session_destroy();
	echo "<script>window.location='index.php';</script>";
}
else
		echo "<script>window.location='alogin.php';</script>";


?>