<?php
session_start();
	if(isset($_SESSION["ad_session"]))
	{
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artist Bucks</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	
	<link href='../css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/ekko-lightbox.js"></script>

  </head>
<body>



<section id="center">
  <div class="clearfix">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" width="100%" height="50%" >
        <div class="item active" align="center" > <img src="../img/b3.png" alt="First slide" width="80%" height="50%">
            <div class="carousel-caption"> </div>
        </div>
        <div class="item" align="center"> <img src="../img/g1.png" alt="Second slide" width="80%" height="50%">
            <div class="carousel-caption"> </div>
        </div>
        <div class="item" align="center"> <img src="../img/e3.png" alt="Third slide" width="80%" height="50%">
            <div class="carousel-caption"> </div>
        </div>
		<div class="item" align="center"> <img src="../img/g3.png" alt="Fourth slide" width="80%" height="50%">
            <div class="carousel-caption"> </div>
        </div>
      </div>
    </div>
   
	</div>

 </div>
 </section>
 <font style="font-family:ARIAL">
<section id="deals_page">
 <div class="container">
  <div class="row">
   <div class="deals_page clearfix">
    <div class="col-sm-6">
	 <div class="deals_page_left bg_1 clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="img/e1.png"><img src="../img/e1.png" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6>Degas at the Opéra</h6>
		  <h3><a href="#">March 1 – October 12, 2020 </a></h3>
		  <p>West Building, Ground Floor, Outer Tier Galleries</p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="	">Get  Info</a>
		  
		  </div>
		 </div>
	   </div>
	 </div>
	</div>
    <div class="col-sm-6">
	 <div class="deals_page_left clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="img/e2.png"><img src="../img/e2.png" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6>Raphael and His Circle</h6>
		  <h3><a href="#">February 16 – November 15, 2020</a></h3>
		  <p>West Building, Ground Floor - Galleries 22 and 22A</p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">Get  Info</a>
		 
		  </div>
		 </div>
	   </div>
	 </div>
	</div>	
   </div>
   <div class="deals_page clearfix">
    <div class="col-sm-6">
	 <div class="deals_page_left  clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="#"><img src="../img/e3.png" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6>True to Nature: Open-Air Painting</h6>
		  <h3><a href="#">February 2 – November 15, 2020</a></h3>
		  <p>West Building, Ground Floor, Inner Tier Galleries.</p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">Get  Info</a>
		 
		  </div>
		 </div>
	   </div>
	 </div>
	</div>
    <div class="col-sm-6">
	 <div class="deals_page_left bg_1 clearfix">
	   <div class="col-sm-5">
	    <div class="deals_page_left_1 card-image">
		 <a href="#"><img src="../img/h.png" width="100%" height="185px"></a>
		</div>
	   </div>
	   <div class="col-sm-7 space_left">
	     <div class="deals_page_left_2">
		  <h6>Expire in 600 days</h6>
		  <h3><a href="#">Litora torquent per  nostra, per inceptos himenaeos</a></h3>
		  <p>Fusce nec augue semper porta</p>
		  <div class="clearfix deals_page_left_2_inner">
		  <a class="tag_1" href="#">Get  Info</a>
		 
		  </div>
		 </div>
	   </div>
	 </div>
	</div>	
   </div>
 </div>
    
   </div>
   
  </div>
 </div>
</section>

<section id="blog_post">
 <div class="blog_post_main clearfix">
   <div class="container">
  <div class="row">
   <div class="clinic_home text-center clearfix">
    <h1> LATEST BLOGS</h1>

   </div>
   <div class="blog_post clearfix">
    <div class="col-sm-4">
	 <div class="blog_post_inner">
	   <div class="card-image"><img src="../img/b1.png" width="100%" height="300px"></div>
	   <h5>Aug,2022</h5>
	    <h4><a href="#">An Interior Life Thomas W Schaller Watercolor 15x15 inches The paraphrased Wordsworth quote - "Mother Nature is the best teacher" </a></h4>
	   <p>- is often accepted by painters as something approaching gospel. And in truth , there is no substitute for actual site observation in our attempts to understand the many complexities of color, texture, and light. But for me, there are many other teachers of equal importance. Dreams, memories, and the creative invention of pure imagination are just as critical to the artist in the attempt to tell the stories we may wish our work to tell.</p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="blog_post_inner">
	   <div class="card-image"><img src="../img/b2.png" width="100%" height="300px"></div>
	   <h5>Feb,2022</h5>
	   <h4><a href="#">Waiting in the Wings watercolor, 12" x 12" Chris Beck</a></h4>
	   <p>This past Friday, I learned that my painting "Arabesque" had received the First Place award in the Other Media category of the Richeson75 Small Works show.  In addition to a generous award, I am particularly pleased with juror Molly Johnson's statement: "A vibrant and extremely well executed watercolor. The artist's dynamic design of background and colorful subjects are whimsical yet it is a sophisticated piece of work." She really understands what I'm trying to do. The show is at the Richeson School of Art and Gallery in Kaukauna, Wisconsin from February 23 to April 4, 2021.</p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="blog_post_inner">
	   <div class="card-image"><img src="../img/b3.png" width="100%" height="300px"></div>
	   <h5>Nov, 08th, 2017</h5>
	   <h4><a href="#">Animal in Watercolor and Acrylics</a></h4>
	   <p>We are all products of our collective and accumulated experiences. Even as we grab our painting kits and head out with the aim to simply paint the world as it is outside our door, we cannot experience that actual scene without input beyond just the the simple act of looking. It is almost an impossibility to see anything with such unfettered clarity. For example, there are always fragments of our memories of having seeing it before. We may also be informed by how we may wish to see it, or how we hope to portray it in our work. In addition, we can often be influenced by how others have seen and/or painted such a scene as well. In short, it is all but impossible to ever paint exactly what we see as much as we paint how we think and feel about what we see.</p>
	 </div>
	</div>
   </div>
   <div class="services_home_2 text-center clearfix">
    
   </div>
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
