<?php
get_header();
?>
<?php

$_product = wc_get_product();


?>

<br><br><br><br>
 <div class="container-fluid" id="single-product">
	<div class="row">
		<div class=" col-md-6">
		
            <a class="list-quotes" href="">
              
      <img class='img-responsive img-size' alt="img" src="<?php echo
get_the_post_thumbnail_url();
?>">
            </a>
        

		</div>
				<div class="col-md-6 ">
<div class="quotes" style="margin-top: 50px">
					 <h1 style=" border-bottom: 3px solid #a7d500;display: inline;">KAMSHET</h1><br><br>
					  <p style="padding-left:20px;"><?php the_content();?></p>
                     <div class="lib-header-seperator"></div>
                     <div class="row" >
                     <div class="col-xs-11" style="text-align: justify;line-height:24px;">
										<div class="details col-md-6">
						
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<h4 class="price" style="color:#000;margin-left: -20px;">RATE : <span><?php echo $_product->get_regular_price();?>/per person/ per night</span></h4>
						<p class="product-description">Enjoy the holiday in our beautiful Kamshet Resort</p>
						
						<p class="vote"><strong>91%</strong> of visitor enjoyed this location! <strong>(87 votes)</strong></p><br><br> 
						
					
				</div>
					<div class="row" style="padding-left:30px;">
						
							<a class="col-xs-10 col-md-10 col-lg-10 col-sm-10 button" href="<?php
the_permalink();
?>">Book Now</a>

							
						
						</div>

							</div>
						</div>
						</div><br><br><br>
						</div>

					</div>
				</div>





 <div class="container-fluid">
	<div class="row">
			<div class="col-md-6">
<div class="quotes" style="margin-top: 0px">
                  <div style="margin-left:50px; ">  <h1 style=" border-bottom: 3px solid #a7d500;
  display: inline;padding-left: 0px;display: inline;">FACILITIES</h1></div>
                     <div class="lib-header-seperator"></div><br><br>
                     <div class="row" style="padding-left: 50px;">
                     <div class="col-xs-4">
								<ul>
									<li><i class="fa fa-cutlery incon-space" aria-hidden="true"></i> Breakfast</li><br>
									<li><i class="fa fa-coffee incon-space"></i><span>Hi Tea</span></li><br>
									<li><i class="fa fa-cutlery incon-space" aria-hidden="true"></i>Lunch</li><br>
									<li><i class="fa fa-wifi incon-space" aria-hidden="true"></i> Wi-fi</li><br>
									<li><i class="fa fa-bed incon-space" aria-hidden="true"></i> 2 King Beds</li><br>
									
									
								</ul>
							</div>
                     	<div class="col-xs-6" style="padding-left: 120px;">
								<ul>
									<li><i class="fa fa-cutlery incon-space" aria-hidden="true"></i>Dinner</li><br>
									<li><i class="fa fa-cutlery incon-space" aria-hidden="true"></i>Breakfast</li><br>
									<li><i class="fa fa-cutlery incon-space" aria-hidden="true"></i> Lunch</li><br>
									<li><i class="fa fa-male incon-space" aria-hidden="true"></i> Room service</li><br>
									<li><i class="fa fa-male incon incon-space" aria-hidden="true"></i> Breakfast</li><br>
									
									
								</ul><br><br><br>
							</div>
							
						</div>
                </div>
		</div>

		<div class="col-md-6">
		
            <a class="list-quotes" href="/">
                
                <img alt="farmfun" src="<?php
echo get_the_post_thumbnail_url();
?>"><br><br>
            </a>
        
<br><br><br>
		</div>

	</div>
</div>

</div>


<?php
get_footer();
?>