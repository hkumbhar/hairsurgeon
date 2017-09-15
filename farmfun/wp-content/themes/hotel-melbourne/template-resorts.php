<?php
/**
 * Template Name: All-Resorts
 */
?>

<?php get_header(); ?>
<div class="row">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="1"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 350px;"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header"><?php the_title();?></h1>
                        
                    </div>
                </div>
                
                <div class="item">
 					<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 350px;"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header"><?php the_title();?></h1>
                       
                    </div>

                </div>
                
                <div class="item">
                     <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 350px;"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header"><?php the_title();?></h1>
                       
                    </div>
                </div>

            </div>


			<!-- Controls -->
			<a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
            
            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
		</div>
    </div>
    

<?php 

$args = array(
    'number'     => $number,
    'orderby'    => 'title',
    'order'      => 'ASC'
);
$product_categories = get_terms( 'product_cat', $args );
$count = count($product_categories);
if ( $count > 0 ){
    foreach ( $product_categories as $product_category ) {
        $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    // 'terms' => 'white-wines'
                    'terms' => 'resort'
                )
            ),
            'post_type' => 'product',
            'orderby' => 'title,'
        );
        $products = new WP_Query( $args );
        
        while ( $products->have_posts() ) {
            $products->the_post();
            ?>
            <div class="col-sm-6">
			<figure>
			        <img alt="farmfun" src="<?php echo get_the_post_thumbnail_url(); ?>">

			        <figcaption>
			        <BR><BR>
			            <h3><?php the_title();?></h3>
			           
			             <p class="pull-left"><a href="<?php echo get_permalink(); ?>">Book Now</a></p>
			        </figcaption>
			    </figure>
			</div>
        <?php    
           
        } 	
      	


    }
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php get_footer(); ?>
