<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

	include("header.php");
	include("../conn.php");

	$selcat=mysqli_query($con,"select * from event where eid=".$_REQUEST["id"]);
	$r_cat=mysqli_fetch_row($selcat);
	?>
<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
<center>


<form name="form1" method="post"  action="eventedit.php"enctype="multipart/form-data">
		<h1>event Update</h1>
		<br />
		<table border="3">
			<tr>
				<td>Event Name</td>
				<td><input type="text" name="name" value="<?php echo $r_cat[1];?>" />
				</td>
			</tr>
			<tr>
				<td>Event Date</td>
				<td><input type="text" name="date" value="<?php echo $r_cat[2];?>" />
				</td>
			</tr>
			
			<tr>
			
				<td>Event Venue</td>
				<td><textarea name="venue"><?php echo $r_cat[3];?></textarea>
				</td>
			</tr>
			<tr>
				<td>Event Time</td>
				<td><input type="text" name="time" value="<?php echo $r_cat[4];?>" />
				</td>
			</tr>
			<tr>
				<td>Event Photo</td>
				<td>
								<input type="file" name="photo" />
				<input type="hidden" name="old_img" value="<?php echo $r_cat[5]; ?>" />
				<input type="hidden" name="proid" value="<?php echo $r_cat[0]; ?>" />	
				<img src="../paintings/<?php echo $r_cat[5]; ?>" height="220px" width="220px" />
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
					<input type="hidden" name="eid" value="<?php echo $r_cat[0]; ?>" />	
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="eupd" value="submit" /></td>
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