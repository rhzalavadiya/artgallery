<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

	include("header.php");
	include("../conn.php");

	$selcat=mysqli_query($con,"select * from category where cat_id=".$_REQUEST["id"]);
	$r_cat=mysqli_fetch_row($selcat);
	?>
<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
<center>


<form name="form1" method="post"  action="CategoryEdit.php"enctype="multipart/form-data">
		<h1>Category Update</h1>
		<br />
		<table border="3">
			<tr>
				<td>name</td>
				<td><input type="text" name="name" value="<?php echo $r_cat[1];?>" />
				</td>
			</tr>
			
			<?php /*?><tr>
				<td>image</td>
				<td><input type="file" name="img" />
					<input type="hidden" name="old_img" value="<?php echo $r_cat[2]; ?>" />
				
				<img src="../<?php echo $r_cat[2]; ?>" height="220px" width="220px" />
					</td>

			</tr><?php */?>
			<tr>
				<td>
					<input type="hidden" name="catid" value="<?php echo $r_cat[0]; ?>" />	
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="cat_upd" value="submit" /></td>
			</tr>
		</table>	
		</form>
</center>
</div>
</div>
</div>
</section>
<?php
	include("footer.php");
	}	
	else
		echo "<script>window.location='alogin.php';</script>";

?>