<?php get_header(); ?>
<!--HEADER START-->
<div class="header" id="header">
<div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-6">
        <h1 id="slider-heading-color"><?php the_field('hair_regrowth');?></h1>
        <H2 id="slider-heading"><?php the_field('hair_to_be_proud_of');?></H2>
        <p><?php the_field('professional_medical_treatment'); ?> </p><br><br>
        <button type="button" class="btn btn-default" id="button-view-more" >KNOW MORE</button>
    </div>
    <div class="col-md-6 col-lg-6">  
    </div>
  </div>
</div>

</div>

<div class="three-box" id="three-boxes">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 wow flipInY" id="one-box" data-wow-delay="0.3s">
      <h5 class="box-one-head"><?php the_field('why_hair_transplant'); ?></h5>
      <p class="box-one-text"><?php the_field('why_hair_transplant_description'); ?></p><button class="SeeMore3" data-toggle="collapse" href="#collapseTwo" style="">Read More</button>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 wow flipInY" id="second-box" data-wow-delay="0.2s">
      <h5 class="box-one-head"><?php the_field('about_us_box_two'); ?></h5>
      <p class="box-one-text"><?php the_field('about_us_box_two_description'); ?></p><button class="SeeMore3" id="second-btn" data-toggle="collapse" href="#collapseTwo">Read More</button>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 wow flipInY" id="thired-box" data-wow-delay="0.1s">
      <h5 class="box-one-head"><?php the_field('opeaning_hours_box_three'); ?></h5>
      <div class="row" id="box-border"><span class="thired-box-format"><?php the_field('opeaning_hours_box_three_description_day'); ?></span><?php the_field('opeaning_hours_box_three_description_time'); ?><span ></span></div><div class="row"><span class="second-span"><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('opeaning_hours_box_three_description_appointment'); ?><br style="line-height: 25px;">&nbsp;&nbsp;&nbsp; <?php the_field('opeaning_hours_box_three_description_app_landline'); ?></span></div>
    </div>
  </div>
</div>
</div>
<br><br>
<!--HEADER END-->
<!-- services strat -->
<div class="statistics" id="statistics" >
<div class="container-fluid">
<h2 style="color: #b28d31;"><?php the_field('statistics_about_hair_surgeon_heading'); ?></h2>
<p style="color: #808080;"><?php the_field('statistics_about_hair_surgeon_description'); ?></p>
  <div class="row">
    <div class="col-md-3 col-lg-3">
    <img src="./img/_0000_Layer-1.png">
      <p id="statistics-heading"><?php the_field('800_patients_hair_transplants_heading'); ?><br><?php the_field('800_patients_hair_transplants_heading_two'); ?></p>
    </div>
    <div class="col-md-3 col-lg-3">
    <img src="./img/_0001_Layer-2.png">
      <p id="statistics-heading"><?php the_field('800_patients_image_two'); ?><br><?php the_field('treated_image_two'); ?> </p>
    </div>
    <div class="col-md-3 col-lg-3">
    <img src="./img/_0002_Layer-3.png" style="padding-bottom: 30px;">
      <p id="statistics-heading"><?php the_field('text_for_image_three_1');  ?><br><?php the_field('text_for_image_three_2');  ?></p>
    </div>
    <div class="col-md-3 col-lg-3">
    <img src="./img/_0003_Layer-4.png">
      <p id="statistics-heading"><?php the_field('text_for_image_four_1');  ?><br><?php the_field('text_for_image_four_2');  ?> </p>
    </div>
    <!-- <div class="col-md-3 col-lg-3">
    <img src="./img/_0004_Color-Fill-4.png">
      <p id="statistics-heading">16 years<br>Experience</p>
    </div> -->
  </div>
</div>
</div>
<!--SERVICES END-->
<!-- TESTIMONIAL SECTION START-->
<div class="container-fluid">
  <div class="row">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0004_shutterstock_393056899.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <i class="fa fa-plus fa-2x text" aria-hidden="true"></i>
                      </div>
                    </div>
              </div>
              
                <div class="item">
                  <div class="pad15">
                      <img src="./img/250images.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <i class="fa fa-plus fa-2x text" aria-hidden="true"></i>
                      </div>
                    </div>
              </div>
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0003_shutterstock_90595231.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <a href=""><i class="fa fa-plus fa-2x text" aria-hidden="true"></i></a>
                      </div>
                    </div>
              </div>
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0002_Picture1.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <a href=""><i class="fa fa-plus fa-2x text" aria-hidden="true"></i></a>
                      </div>
                    </div>
              </div>
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0000_Picture3.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                       <a href=""><i class="fa fa-plus fa-2x text" aria-hidden="true"></i></a>
                      </div>
                    </div>
              </div>
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0001_Color-Fill-1.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <a href=""><i class="fa fa-plus fa-2x text" aria-hidden="true"></i></a>
                      </div>
                    </div>
              </div>
                <div class="item">
                  <div class="pad15">
                      <img src="./img/_0002_03 - Copy.png" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                      <!--   <div class="text">John Doe</div> -->
                        <a href=""><i class="fa fa-plus fa-2x text" aria-hidden="true"></i></a>
                      </div>
                    </div>
              </div>
                           </div>

            <div class="fa fa-arrow-circle-left fa-3x leftLst"></div>
            <div class="fa fa-arrow-circle-right fa-3x rightLst"></div>

        </div>
  </div>
  
</div>



<!-- TESTIMONIAL SECTION END -->

<!-- Head tags to include FontAwesome -->


<div class="container" id="testimonial">
  <div class="row">
    <div class="testimonial">
    <h2 style="color: #b28d31;"><?php the_field('what_our_patients_are_saying_heading'); ?></h2>
    <p><?php the_field('what_our_patients_are_saying_description'); ?></p>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active col-md-offset-1" style="width: 100%;">
            <blockquote>
              <div class="row">
              
                <div class="col-md-3 col-lg-3 text-center" style="padding-top: 30px;">
                  <img class="img-circle" src="./img/_0003s_0001s_0000_stock-photo-portrait-of-a-man-touching-his-hair-381063274.png" style="width: 150px;height:150px;"><br>
                  <h4>JOHN DOE</h4>
                <h5>Pune, India</h5>
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-md-7 col-lg-7">
                  <p style="padding-top: 52px; text-align: justify;"><?php the_field('description_for_the_first_testimonial'); ?></p>
                  
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item col-md-offset-1" style="width: 100%; ">
            <blockquote>
              <div class="row">
                <div class="col-md-3 col-lg-3 text-center" style="padding-top: 30px;">
                  <img class="img-circle" src="./img/_0003s_0001s_0000_stock-photo-portrait-of-a-man-touching-his-hair-381063274.png" style="width: 150px;height:150px;"><br>
                  <h4>JOHN DOE</h4>
                <h5>Pune, India</h5>
                </div>
                <div class="col-md-7 col-lg-7">
                   <p style="padding-top: 52px; text-align: justify;"><?php the_field('description_for_the_second_testimonial'); ?></p>
                 
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item col-md-offset-1" style="width: 100%;">
            <blockquote>
              <div class="row">

                <div class="col-md-3 col-lg-3 text-center" style="padding-top: 30px;">
                  <img class="img-circle" src="./img/_0003s_0001s_0000_stock-photo-portrait-of-a-man-touching-his-hair-381063274.png" style="width: 150px;height:150px;"><br>
                  <h4>JOHN DOE</h4>
                <h5>Pune, India</h5>
                </div>
                <div class="col-md-7 col-lg-7">
                  <p style="padding-top: 52px; text-align: justify;"><?php the_field('description_for_the_third_testimonial'); ?></p>
                  
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
       <!--  <!-- Carousel Buttons Next/Prev -->
       <!--  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->
      </div>                          
    </div>
  </div>
</div>


<!-- LATEST BLOG AND POST SECTION -->
<div class="container">
  <div class="blog-post" id="blog-post">
<div class="row">
    <div class="col-sm-3">
        <div class="owl-carousel">
            <div class="post-slide">
               
                <div class="post-content" style="background-color: #fff;text-align: justify;padding:0px;font-family: Helvetica, Arial, sans-serif;border: 0px solid #ececec;">
                    <h3 class="post-title-format">
                        <?php the_field('latest_blog_and_posts_heading'); ?>
                    </h3>
                    <p class="post-description"><?php the_field('latest_blog_and_posts_description'); ?></p><br>
                    <div class="btn-align"><button type="button" class="btn btn-default" id="post-content-latest-blog" style="border-radius:0px;height: 35px;padding-top: 8px; " >READ ALL</button></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="owl-carousel">
            <div class="post-slide">
                <div class="post-img">
                    <img class="img-responsive" src="./img/_0001_02.png" alt="loraim">
                    <div class="over-layer">
                        <ul class="post-link">
                            <li>
                                <a href="#" class="fa fa-link"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="post-date">
                        <span class="date">25.</span>
                        <span class="month">8.</span>
                    </div> -->
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                        <a href="#"><?php the_field('blog_one_heading'); ?><br></a>
                    </h3>
                    <p class="post-description"><?php the_field('blog_one_description'); ?></p>
                    <a href="#" class="read-more">Read Post ></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="owl-carousel">
            <div class="post-slide">
                <div class="post-img">
                    <img class="img-responsive" src="./img/_0001_02.png" alt="loraim">
                    <div class="over-layer">
                        <ul class="post-link">
                            <li>
                                <a href="#" class="fa fa-link"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="post-date">
                        <span class="date">25.</span>
                        <span class="month">8.</span>
                    </div> -->
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                        <a href="#"><?php the_field('blog_two_heading'); ?></a>
                    </h3>
                    <p class="post-description"><?php the_field('blog_two_description'); ?></p>
                    <a href="#" class="read-more">Read Post ></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="owl-carousel">
            <div class="post-slide">
                <div class="post-img">
                    <img class="img-responsive" src="./img/_0001_02.png" alt="loraim">
                    <div class="over-layer">
                        <ul class="post-link">
                            <li>
                                <a href="#" class="fa fa-link"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="post-date">
                        <span class="date">25.</span>
                        <span class="month">8.</span>
                    </div> -->
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                        <a href="#"><?php the_field('blog_three_heading'); ?></a>
                    </h3>
                    <p class="post-description"><?php the_field('blog_three_description'); ?></p>
                    <a href="#" class="read-more">Read Post ></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- BOTTOM THREE BOX SECTION -->
<div class="bottom-three-box">
<div class="container">
  <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 nopadding"  >
      <div class="bottom-box-one">
        <p><a href="#" target="_blank" class="cmn-t-underline-bottom-box">CALCULATE YOUR COST</a></p>
      </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 nopadding" >
      <div class="bottom-box-two">
        <p><a href="#" target="_blank" class="cmn-t-underline-bottom-box">HAVE SOME QUESTIONS ?(FAQ)</a></p>
      </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 nopadding" >
      <div class="bottom-box-three">
        <p><a href="#" target="_blank" class="cmn-t-underline-bottom-box">TRAININGS</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- BOTTOM THREE BOX SECTION -->
<?php get_footer();?>