<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

	include("header.php");
	include("../conn.php");
	?>
	<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-12">
					<h1 align="center">CategoryView</h1><br />
					
  <br><br><a href="categoryadd.php"><h3 align="center">Add new</h3></a>
	<?php
	$result=mysqli_query($con, "select * from category");
	echo "<center>";
	echo "<table border=5>";
	
/*	echo "<tr>
			<th>ID</th>
			<th>Name</th>
			
			<th>Update</th>
			<th>Delete</th>
			</tr>";
*/			
		echo "<tr>";
			
			$no=mysqli_num_fields($result);
	for ($i=0;$i<$no;$i++)
	{
		$fieldinfo=mysqli_fetch_field_direct($result,$i);
		echo "<th>".$fieldinfo->name."</th>";
	}
	echo "<th>Update</th>
	
				<th>Delete</th></tr>";		
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		//echo "<td><img src='../".$row[2]."' height=50px width=50px></td>";
		echo "<td> <a href='categoryupdate.php?id=$row[0]'>Update</a></td>";
		echo "<td> <a href='categorydelete.php?id=$row[0]'>Delete</a></td>";
		echo "</tr>";
	}
		echo"</table>";
		echo "</center>";
	
?>


</div>
</div>
</div>
</section><br><br>
<?php
	include("footer.php");
	}	
	else
		echo "<script>window.location='alogin.php';</script>";

?>