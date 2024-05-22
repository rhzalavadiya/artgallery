<?php 
session_start();
if(isset($_SESSION["ad_session"]))
{
include("header.php"); ?>
<br />
<br />
<style>

</style>

<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
<center>
		<form  name="form1" method="post" enctype="multipart/form-data">
		<h1 color="white">Event Add</h1>
		<br>
		<br>
		<table border="2" height="150px">
		
			<tr>
				<td>Event Name : &emsp;&emsp;&emsp;&ensp; </td>
				<td><input type="text" name="en" /></td>
			</tr>
            <tr>
				<td>Event Date : &emsp;&emsp;&emsp;&ensp; </td>
				<td><input type="text" name="ed" /></td>
			</tr>			
			<tr>
				<td>Event Venue : &emsp;&emsp;&emsp;&ensp; </td>
				<td><textarea name="ev"></textarea></td>
			</tr>
			<tr>
				<td>Event Time  : &emsp;&emsp;&emsp;&ensp; </td>
				<td><input type="text" name="et" /></td>
			</tr>
			<tr>
				<td>Event Photo : &emsp;&emsp;&emsp;&ensp; </td>
				<td><input type="file" name="ep" /></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="2"><input type="submit" name="sub" value="submit" /></td>
			</tr>
		</table>
		
		</form>
	</center>
	</div>
	</div>
	</div>
	</section>

	
	
	<br />
<?php
	include("footer.php");
	include("../conn.php");
	
	if(isset($_POST["sub"]))
	{
	    $a=$_POST["en"];
		$d=$_POST["ed"];
		$b=$_POST["ev"];
		$c=$_POST["et"];
		//$d=$_POST["ep"];
		//$path="../upload/".$_FILES["ep"]["name"];
		
		$target_dir = "../upload/";
print_r($target_file = $target_dir . basename($_FILES["ep"]["name"]));
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if $uploadOk is set to 0 by an error

 print_r( $im= move_uploaded_file($_FILES["ep"]["tmp_name"], $target_file)) ;
    echo "The file ". htmlspecialchars( basename( $_FILES["ep"]["name"])). " has been uploaded.";

		//move_uploaded_file($_FILES["ep"]["tmp_name"],"../".$path);
		mysqli_query($con,"insert into event values(null,'$a','$d','$b','$c','$target_file')");
		
		echo "<script>window.location='eventview.php';</script>";
	}
}	
	else
		echo "<script>window.location='alogin.php';</script>";//
?>