
<?php 
session_start();
if(isset($_SESSION["ad_session"]))
{

include("header.php");
		include("../conn.php");
		 
		 mysqli_query($con,"delete from event where eid=".$_REQUEST["id"]);
	
	echo "<script>window.location='eventview.php';</script>";
}
	else	 

	echo "<script>window.location='alogin.php';</script>";
?>	

	<?php

		include("footer.php");
		
?>	 
		 
		 
		 
		 
	