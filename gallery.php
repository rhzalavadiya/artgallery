<?php
  include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artist Bucks</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.js"></script>
<style>
div.gallery {
  border: 1px solid #ccc;
  padding:15px;
  width: 95%;
  margin-left:auto;
 }

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 50%;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 15px 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<br>
<h1 align="center" style="color:#205759"><b>GALLERY</b> </h1>


<br>
<?php
	$query= "select * from art";
	$result = mysqli_query($con,$query);
	
	while($data = mysqli_fetch_assoc($result))
	{
  ?>
  <div class="responsive">
  <div class="gallery">
    <a  href="..paintings/<?php echo $data['art_photo'];?>">
      <img src="..paintings/<?php echo $data['art_photo'];?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><?php echo $data['art_name'];?> </div>
	<div class="desc"><?php echo $data['art_desc'];?> </div>
	<div class="desc"><b>By:&nbsp;<u><?php echo $data['artist_name'];?> </u></b></div>
  </div>
</div>

 <?php
	}
	?>
<div class="clearfix"></div>



</body>
</html>

<?php
include('footer.php');
?>
