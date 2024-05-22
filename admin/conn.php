<?php
	$con=mysqli_connect("localhost","root","");
	
	if(!$con)
	{
		echo mysqli_error();
		echo "not connected....";
	}
	else
	{
	//echo "connected..";
	}
	
	
	$sel_cat=mysqli_select_db($con,"artist_bucks");

?>