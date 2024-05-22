<?php
session_start();
if (isset($_SESSION["ad_session"])) {

	include("header.php");
	include("../conn.php");
	?>
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
	$result = mysqli_query($con, "select * from artist");
	?>

	<?php
	echo "<center><h1>Artist</h1><br>";
	echo"<h3 align='center'><a href='addartist.php'>Add New</a></h3>";
	echo "<br>";
	echo "<table border=5>";
	echo "<tr>";
	$no = mysqli_num_fields($result);
	for ($i = 0; $i < $no; $i++) {
		$fieldinfo = mysqli_fetch_field_direct($result, $i);
		echo "<th>" . $fieldinfo->name . "</th>";
	}
	echo "<th>Delete</th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";

		echo "<td><img src='../upload/" . $row[1] . "' height=50px width=50px></td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		echo "<td>" . $row[4] . "</td>";

		echo "<td><a href='artistdelete.php?id=$row[0]'>Delete</a></td>";
		echo "</tr>";
	}
		echo "</center>";
	echo "</table>";
	echo "</center>";


	?>
	<?php
	include("footer.php");

} else
	echo "<script>window.location='alogin.php';</script>";

?>