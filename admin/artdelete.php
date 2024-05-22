
<?php 
session_start();
if(isset($_SESSION["ad_session"]))
{

include("header.php");
		include("../conn.php");
		 
		 mysqli_query($con,"delete from art where art_id=".$_REQUEST["id"]);
	
	echo "<script>window.location='artview.php';</script>";
}
	else	 

	echo "<script>window.location='alogin.php';</script>";
?>	

	<?php

		include("footer.php");
		
?>	 
		 
		 
		 
		 
	