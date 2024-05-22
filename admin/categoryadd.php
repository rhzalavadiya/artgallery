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
		<form   name="form1" method="post" enctype="multipart/form-data">
		<h1 color="white"> Category Add</h1>
		<br>
		<br>
		<table border="2" height="150px" >
		
			<tr>
				<td>name : &emsp;&emsp;&emsp;&ensp; </td>
				<td><input type="text" name="name" /></td>
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
		$nm=$_POST["name"];
		//$path="upload/".$_FILES["img"]["name"];
		move_uploaded_file($_FILES["img"]["tmp_name"],"../".$path);
		mysqli_query($con,"insert into category values(null,'$nm')");
		
		echo "<script>window.location='categoryview.php';</script>";
	}
}	
	else
		echo "<script>window.location='alogin.php';</script>";
?>