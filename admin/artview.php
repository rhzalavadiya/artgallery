<style>
		h3 a {
			color: #007bff;
			text-decoration: none;
		}
		h3 a:hover {
			text-decoration: underline;
		}
	</style>
<?php
session_start();
if(isset($_SESSION["ad_session"]))
{

	include("header.php");
	include("../conn.php");
	$result=mysqli_query($con,"select * from art");
	?>
	
	<?php
	echo "<center><h1>Paintings</h1><br>";
	echo"<h3 align='center'><a href='addart.php'>Add New</a></h3>";
	echo "<br>";
	echo "<table border=5>";
	echo "<tr>";
	$no=mysqli_num_fields($result);
	for ($i=0;$i<$no;$i++)
	{
		$fieldinfo=mysqli_fetch_field_direct($result,$i);
		echo "<th>".$fieldinfo->name."</th>";
	}
	echo "
			<th>Delete</th></tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo "<td>".$row[0]."</td>";
		
		
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
echo "<td><img src='../paintings/".$row[4]."' height=80px width=80px></td>";
	echo "<td>".$row[5]."</td>";
		echo "<td><a href='artdelete.php?id=$row[0]'>Delete</a></td>";
	
		echo "</tr>";
	}
	echo"</table>";
	echo "</center>";


?>
<?php
	include("footer.php");
	
}	
	else
		echo "<script>window.location='alogin.php';</script>";

?>