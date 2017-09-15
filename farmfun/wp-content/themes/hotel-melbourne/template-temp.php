<?php
/**
 * Template Name: Services1
 */
?>
<?php get_header();?>



<br><br><br><br><br><br>
<?php 
$args = array( 'post_type' => 'facilities', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );?>
<div class="container">
  <div class="row">
      <div class="col-md-12">
      
        <p class="main_title"><span>OUR FACILITIES</span></p>
      </div>
    </div>
    <div class="row">
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="col-md-4">
        <div class="box">
          <div class="box-icon"> <span class="fa fa-4x fa-music"></span> </div>
          <div class="info">
            <h4 class="text-center"><?php the_title();?></h4>
            <p><?php the_content();?></p>
          </div>
        </div><BR>
<BR>      </div>
      <?php endwhile;

?>
      
    </div>
    <br><br><br>

</div>


<?php get_footer();?>
