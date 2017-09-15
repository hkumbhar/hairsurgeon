<?php
/**
 * Template Name: Gallery
 */
?>

<?php get_header(); ?>


 <div class="container-fluid">
        <div class="row">
       

        <div align="center"><br><br><br><br><br>
            <button class="main-btn main-btn2 filter-button" data-filter="all">ALL</button>
            <button class="main-btn main-btn2 filter-button" data-filter="hdpe">Single Room</button>
            <button class="main-btn main-btn2 filter-button" data-filter="sprinkle">Double Room</button>
            <button class="main-btn main-btn2 filter-button" data-filter="spray"> Delux Room</button>
            <button class="main-btn main-btn2 filter-button" data-filter="irrigation">Royal Room</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter hdpe ">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive ">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
</section><br><br>
<script type="text/javascript">
	
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});


</script>

<?php get_footer(); ?>