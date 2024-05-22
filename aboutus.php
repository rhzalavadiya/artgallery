<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artist Bucks</title>

	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

  </head>
<body>

<?php
include("header.php")
?>

<section id="contact_us">
		<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="port" style="color:#205759;">About Us</h1>
			</div>
			<p style="font-size:25px;" align="center">Welcome to our art website! We are passionate about all forms of art, from painting and sculpture to photography and digital art.
			Our mission is to showcase talented artists from around the world and provide a platform for them to share their work with art lovers everywhere. We hope to inspire and encourage creativity, and to foster a community of artists and enthusiasts who share our love of beauty and self-expression. 
			Thank you for joining us on this artistic journey!</p>
		</div>
		
	</div>
		</div>
		</div>
		</div>
		</div>
		</section>
		
<section id="contact">
 <div class="container">
  <div class="row">
   <div class="contact clearfix">
    <div class="col-sm-4">
	 <div class="contact_inner text-center">
	  <h1><i class="fa fa-map-marker"></i></h1>
	  <h2>Address</h2>
	  <h3>ARTIST BUCKS</h3>
	  <p>
	   Office No. B-10, 1st Floor, <br>
       Consectetur Adipiscing,<br> Integer  Zone, <br>
       Rajkot-360004,Gujarat.
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_2 text-center">
	  <h1><i class="fa fa-envelope"></i></h1>
	  <h2>Email</h2>
	  <p>
	    <a href="#">artistbucks@gmail.com</a><br>
		<a href="#">artist_bucks@gmail.com</a>
	  </p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_inner icon_3 text-center">
	  <h1><i class="fa fa-phone"></i></h1>
	  <h2>Contact No.</h2>
	  <span class="span_1"><i class="fa fa-phone-square"></i>  +91 - 1234-567-890  </span>
	  <span class="span_2"> <i class="fa fa-whatsapp"></i>  +91 - 1234-567-890  </span>
	 </div>
	</div>
   </div>
  </div>
 </div>
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
	$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 

	</script>
	
<script src="js/simple-lightbox.js"></script>

<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
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
