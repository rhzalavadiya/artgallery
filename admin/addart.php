<?php 
session_start();
if(isset($_SESSION["ad_session"]))
{
include "header.php"; 
include("../conn.php");
$selcat=mysqli_query($con,"select * from category")

?>
<br>
<center>
		<form name="form1" method="post" enctype="multipart/form-data">
		<h1>Add art here!!!</h1><br>
		<table border="3">
	
			<tr>
				<td>Art Type</td>
				<td>
					<select name="cat_id">
					<?php
					while($cat=mysqli_fetch_array($selcat))
					{
						?>
							<option value="<?php echo $cat[0]; ?>"><?php echo $cat[1];?></option>
							
						<?php
					}
					?>
					</select>
				</td>
			</tr>

			<tr>
				<td>Art Name  </td>
				<td><input type="text" name="art_name" required></td>
			</tr>
			
			<tr>
				<td>Art Description</td>
				<td><textarea type="message" name="art_desc" placeholder="Description"></textarea></td>
				
			</tr>

			

			<tr>
				<td>Art Image</td>
				<td><input type="file" name="art_img" id="art_img" required></td>
			</tr>
			<?php $selart=mysqli_query($con, "select * from artist");
			?>
				<tr>
				<td>Choose your name</td>
				<td>
					<select name="id">
					<?php
					while($ai=mysqli_fetch_array($selart))
					{
						?>
							<option value="<?php echo $ai[2]; ?>"><?php echo $ai[2]; ?></option>
						<?php
					}
					?>
					</select>
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"> <input type="submit" name="sub" value="submit" /></td>
			</tr>
		
		</table>
		
		</form>
</center>
	</body>
</html>
<?php
	include "../footer.php";
	
	
	if(isset($_POST["sub"]))
	{
		$cid=$_POST["cat_id"];
		$nm=$_POST["art_name"];
		$dt=$_POST["art_desc"];
	   $target_dir = "../paintings/";
       print_r($target_file = $target_dir . basename($_FILES["art_img"]["name"]));
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if $uploadOk is set to 0 by an error

         print_r( $im= move_uploaded_file($_FILES["art_img"]["tmp_name"], $target_file)) ;
         echo "The file ". htmlspecialchars( basename( $_FILES["art_img"]["name"])). " has been uploaded.";
		//$path="../upload/".$_FILES["art_img"]["name"];
		//move_uploaded_file($_FILES["art_img"]["tmp_name"],"../".$path);
		$aid=$_POST["id"];
		mysqli_query($con,"insert into art values(null,'$cid','$nm','$dt','$target_file','$aid')");
		
		echo "<script>window.location='artview.php';</script>";
	}
}	
	else
		echo "<script>window.location='login.php';</script>";

?>