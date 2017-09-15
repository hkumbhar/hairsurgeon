<?php/**
 * Template Name: Home
 */
?>

    <?php get_header(); ?>
        
<div class="home-slider"></div>
<?php wd_slider(1); ?> <br><br><br>    <?php 

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
<?php 
$args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );?>
<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="main_title"><span>Our Services</span></p>
                        </div>
                    </div>
                    <div class="row">
<?php while ( $loop->have_posts() ) : $loop->the_post();?>
   <div class="col-md-4">
                            <div class="box">
                                <div class="box-icon"> <span class="fa fa-4x fa-music"></span> </div>
                                <div class="info">
                                    <h4 class="text-center"><?php the_title();?></h4>
                                   <?php the_content();?>
                                </div>
                            </div>
                        </div>
                        
<?php endwhile;

?>
                
                    

                       
                    </div>
                </div>

                <section class="module parallax parallax-2" style="margin-top: 30px;height: 300px;width: 100%;" style="    background: rgba(9, 13, 17,0.9) none repeat scroll 0 0;">
                    <div class="container">
                        <!-- <h4>STIIL NOT CONVINCED?</h4><br><br> -->
                        <br>
                        <br>
                        <h2>GET IN TOUCH</h2>
                        <br>
                        <div class="text-center"> <a href="http://farmfun.in/contact-us/" class="main-btn main-btn2">Contact Us</a></div>
                </section>

                <script>
                    /*============================================
                    Blog carousel
                    ==============================================*/

                    $('.carousel-blog').flickity({
                        pageDots: false,
                        wrapAround: true,
                        imagesLoaded: true,
                        freeScroll: true,
                        autoPlay: 5000,
                    });
                </script>
                <!----/Blog slider------------------>

                <div class="clearfix"></div>
                <section class="blog-section">
                    <div class="container ">
                        <div class="row">
                            <?php get_template_part('post','archive-content'); ?>
                                <?php get_sidebar(); ?>
                </section>
                <div class="cearfix"></div>
                <?php get_footer(); ?>
                    </div>