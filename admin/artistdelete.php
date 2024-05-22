
<?php 
session_start();
if(isset($_SESSION["ad_session"]))
{

include("header.php");
		include("../conn.php");
		 
		 mysqli_query($con,"delete from artist where id=".$_REQUEST["id"]);
	
	echo "<script>window.location='artistview.php';</script>";
}
	else	 

	echo "<script>window.location='alogin.php';</script>";
?>	

	<?php

		include("footer.php");
		
?>	 
		 
		 
		 
		 
	