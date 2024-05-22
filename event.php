<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artist Bucks</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  </head>
<body>
<?php
include("header.php");
?>


<section id="exhibition">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="exhibition clearfix">
		<div class="exhibition_1 clearfix">
		 <h1 align="center" style="color:#205759"><b>EVENT</b> </h1>
		</div>
			

		<div class="exhibition_3 clearfix">
		 <div class="exhibition_3_inner clearfix">
		  
		 </div>
		 <div class="exhibition_3_inner_1 clearfix">
		 <?php
	$query= "select * from event";
	$result = mysqli_query($con,$query);
	
	while($data = mysqli_fetch_assoc($result))
	{
  ?>
		  <div class="col-sm-4 space_left">
		   <div class="exhibition_3_inner_1_inner">
		  
		     <div class="grid clearfix exhibition_3_inner_1_inner_image">
					<figure class="effect-marley">
						<img src="..upload/<?php echo $data['ephoto'];?>" alt="img12" width="600" height="400">
						<figcaption>
							<h2><?php echo $data['ename'];?></h2>
							<p><?php echo $data['evenue'];?></p>
												
						</figcaption>			
		            </figure>
	         </div>
	         <div class="exhibition_3_inner_last clearfix">
			  <h3><?php echo $data['edate'];?></h3>
			  <h3><?php echo $data['evenue'];?></h3><br>
			  <h4><?php echo $data['etime'];?></h4>
			  <h5 class="text-right"></h5>
			 </div>
		   </div>
		  </div>
		  
  <?php
	}
	?>
		  
</section>

<?php
include("footer.php");
?>
<script>
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	}); 
$('#toTop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
});
});

</script>

<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
	   navbar_height = document.querySelector('.navbar').offsetHeight;
	   
		$(window).on('scroll', function(){
		    if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
				secondaryNav.addClass('is-fixed');	
				document.body.style.paddingTop = navbar_height + 'px';
				
			} else {
				secondaryNav.removeClass('is-fixed');
				document.body.style.paddingTop = '0'
			}
		});	
		
});
</script>



</body>
       
</html>
