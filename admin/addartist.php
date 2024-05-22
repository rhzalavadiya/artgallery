<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Rockwell ;
  color: #D0F7FF;
  background-color: #fff;
  margin-left: 35%;
  margin-right: 35%;
  margin-top: 40px;
  margin-bottom: 30px;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;

  background-color: #205759;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 20px 0;
  display: inline-table;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #205759;
  margin-bottom: 2px;

}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 10px;
  margin-left: 30%;
  border: none;
  cursor: pointer;
  width: 30%;

 
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #205759;

}
</style>
</head>
<body>

<form  method="POST" name="Add Artist" enctype="multipart/form-data">
  <div class="container">
    <h1>Add Artist</h1>
   
    <hr>
    
     <label for="profile"><b>Profile</b></label><br>
    <input type="file" placeholder="" name="fileToUpload"  id="fileToUpload" required><br><br>
 
    <label for="username"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="unm" required>

    <label for="psw"><b><br>Email</b></label><br>
    <input type="text" placeholder="Enter Email"  name="email" required>

    <label for="psw-repeat"><b><br>Mobile No.</b></label><br>
    <input type="text" placeholder="Enter Mobile Number" name="psw" required><br>
 
    
	
    </hr><br><br>
   

    <input type="submit" class="registerbtn" name="reg" value="Register"/><br>
  </div> 
  </form>
</body>
</html>
<?php
session_start();
include ("conn.php");
//$con=mysqli_connect("localhost","root","","artist_bucks");
echo "connected";
if(isset($_POST["reg"]))
{
	//$path="upload/".$_FILES["profile"]["name"];
	//$im=move_uploaded_file($_FILES["profile"]["tmp_name"],"../".$path);
	//echo $im;
	$target_dir = "../upload/";
print_r($target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]));
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if $uploadOk is set to 0 by an error

 print_r( $im= move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) ;
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

	//$profile= $_POST["profile"];
	$username= $_POST["unm"];
	$email= $_POST["email"];
	$mno= $_POST["psw"];
	$query=mysqli_query($con,"INSERT INTO `artist`VALUES (null,'$target_file','$username','$email','$mno')");
	echo $query;
	echo "<script>window.location='index.php';</script>";
	
	}
	

//else
	//echo "<script>window.location='index.php';</script>";
?>
	
	
	
	
	
	
	
	
	