<?php require 'header_view.php';
?>
<?php //echo'<pre>'; print_r(base_url());die; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Multiple Item Product Carousel</title>
<link href="<?=base_url("assets/css/style.css")?> " rel="stylesheet">
<link href="<?=base_url("assets/css/bootstrap.min.css")?> " rel="stylesheet">

<style>
body {
	background: #e2eaef;
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;  
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	/* background: #7ac400; */
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #7ac400;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.prev_control.carousel-control-prev, .next_control.carousel-control-next {
	height: 44px;
	width: 40px;
	background: #7ac400;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.prev_control.carousel-control-prev:hover,.next_control.carousel-control-next:hover {
	background: #78bf00;
	opacity: 1;
}
.prev_control.carousel-control-prev i, .next_control.carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #fff;
	text-shadow: none;
	font-weight: bold;
}
.prev_control.carousel-control-prev i {
	margin-left: -2px;
}
.next_control.carousel-control-next i {
	margin-right: -4px;
}		
.product_carousel.carousel-indicators {
	bottom: -50px;
}
.product_carousel.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border: none;
}
.product_carousel.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.product_carousel .carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}


</style>

</head>
<body>
	<!--------------------------------------**************************ended**************************------------------------------------- -->
  
<div class="container-xl mt-4" >
	<div class="row">
		<div class="col-md-12">


<!-- <h3>My Custom Slider</h3> -->
		<!--  -->
		<!--  -->
		 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false "> 
   <div class="carousel-indicators "> 
    <?php foreach ($carousel as $k => $row) { ?> 
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $k ?>" class="<?= $k ==0? 'active':'' ?>" aria-current="true" aria-label="Slide <?= $k ?>"></button>
	 <?php } ?> 
     <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>  -->
   </div> 
   <div class="carousel-inner">
    <?php $harisa = 0; ?> 
   <?php foreach ($carousel as $row) { ?>
     <?php $harisa++;  ?> 
      <?php if ($harisa ==1)  { ?> 
      <div class="carousel-item active"> 
        <img src="<?php echo base_url('assets/images/'.$row->name);?>" class="d-block w-100" alt="..."> 
        <div class="carousel-caption d-none d-md-block"> 
         <!-- <h5>First slide label</h5>  -->
         <!-- <p>Some representative placeholder content for the first slide.</p>  -->
        </div>  
    </div>  
      <?php } else { ?>  
      <div class="carousel-item"> 
       <img src="<?php echo base_url('assets/images/'.$row->name);?>" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <!-- <h5>Second slide label</h5> -->
         <!-- <p>Some representative placeholder content for the second slide.</p> -->
       </div>
    </div> 
    <?php }} ?>
   </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

<!-- ------------------------------------***********************Category section********************************------------------------- -->
<div class="container mt-4 ">
    <div class="row "style="margin-left:5%;" >
		<div class="col-md-12">
		<button type="button" class="  btn btn-primary" style="border-radius:1px;">Men's Kick</button>
		<button type="button" class="  btn btn-primary"style="border-radius:1px;" >I watch and airpods</button>
		<button type="button" class="  btn btn-primary"style="border-radius:1px;" >Girls Watch</button>
		<button type="button" class="  btn btn-primary" style="border-radius:1px;">Men's Watch</button>
		<button type="button" class="  btn btn-primary" style="border-radius:1px;">Women's Kick</button>
		<button type="button" class="  btn btn-primary" style="border-radius:1px;">Sunglass</button>
		<button type="button" class="  btn btn-primary" style="border-radius:1px;">Couple Watches</button>
		</div>
	  </div>
	  </div>
	    <!-- <div class="col-md-2">
           
                    <button type="button" class="  btn btn-primary" style="border-radius:1px;">Men's Kick</button>
	                </div>
	  
	               <div class="col-md-2">
                    <button type="button" class="  btn btn-primary"style="border-radius:1px;" >I watch and airpods</button>
					</div>

					 <div class="col-md-2">
                    <button type="button" class="  btn btn-primary"style="border-radius:1px;" >Girls Watch</button>
					</div>

					<div class="col-md-2">
                    <button type="button" class="  btn btn-primary" style="border-radius:1px;">Men's Watch</button>
					</div>

					<div class="col-md-2">
                    <button type="button" class="  btn btn-primary" style="border-radius:1px;">Women's Kick</button>
					</div>

					<div class="col-md-2">
                    <button type="button" class="  btn btn-primary" style="border-radius:1px;">Sunglass</button>
					</div> 

                    <div class="col-md-2">
                    <button type="button" class="  btn btn-primary" style="border-radius:1px;">Couple Watches</button>
					</div> 

        
        
    </div>
   </div> -->
<br><br>
<!-- -------------*************************product carousel*********************------------------ -->


		
<h2>New <b>Arrivals</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride=" carousel" data-interval="0">
		
			<ol class=" product_carousel carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			
			<div class="  carousel-inner">
<div class="item carousel-item active">
					<div class="row">
						<?php foreach($post as $key=>$obj){
							?>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
								<a href="<?=base_url('/index.php/product_controller/shop')?>">	<img src="<?php echo base_url('/assets/images/'.$obj->product_img_1);?>" class="img-fluid" alt="About-images"></a>									
								</div>
								<div class="thumb-content">
									<h4><?php echo $obj->product_name.'' ?></h4>									
									<!-- <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div> -->
									<p class="item-price"><b><?php echo $obj->discount_price.'' ?></b>  <strike><?php echo $obj->product_price.'' ?></strike></p>
									<p class="item-price"><b><?php echo $obj->product_description.'' ?></b></p>
									<a href="https://wa.me/918800355388" class="btn btn-primary"> <i class="fa-brands fa-whatsapp"></i> Inquiry On WhatsApp</a>
								</div>						
							</div>
						</div>
						<?php }?>
						
				
					</div>
				</div>
				
			</div>
			
			 <!-- <a class=" prev_control carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="next_control carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a> -->
		</div>
		</div>
	</div>
</div> 



 <!-- ----------------------------------******************* discount banner Section********************---------------------------------- -->
 <section class="banner" style=" margin: 40px 0;">
 
        <!-- <h4>Repair Service</h4> -->
        <h2>GET UP TO <span>50% Off</span> - END OF SEASON SALE</h2>
        <!-- <button class="normal">Explore More</button> -->
    </section>
<!-- -------------------------------**********************Product video section******************------------------------ -->
<?php require 'product-video_view.php';
?>
    <!-- ----------------------------------------****************** divider small banner******************------------------------------------------- -->
    <section class="sm-banner">
        <div class="container">
            <div class="row gy-3 ">
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <div class="banner-box-1">
                        <h4>crazy deals</h4>
                        <h2><b>buy 1 get 1 free</b></h2>
                        <!-- <span>The best classic dress is on sale at cara</span> -->
                        <p><button class="white">Learn More </button></p>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <div class="banner-box-2">
                        <h4>spring/summer</h4>
                        <h2><b>upcomming season</b></h2>
                        <!-- <span>The best classic dress is on sale at cara</span> -->
                        <p><button class="white"> Collection </button></p>

                    </div>
                </div>
            </div>
        </div>

    </section>
	<!-- ------------------------------*******************************8------------------------------------------------ -->

<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>
<?php require 'footer_view.php';
?>
</body>
</html>                                		
