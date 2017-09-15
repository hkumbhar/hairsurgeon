<!--FOOTER START-->
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-12">
                    <h3> Contact Us </h3>
                    <ul class="show-inline" id="fa-color-format">
                    <i class="fa fa-map-marker fa-lg fa-color " style="color: #7F8C8D;"></i>
                        <li> <span >Address: # 6, Ganga Cascade, North Main Road, Koregaon Park, Besides Pizza Hut, Next to Lane No. 5, Pune 411 001
                        </span></li><br><br>

                        <i class="fa fa-mobile fa-lg fa-color" style="color: #7F8C8D;"></i>
                        <li><span>+91-95611 68150 </span></li><BR><br>
                        <i class="fa fa-envelope-o fa-lg fa-color" style="color: #7F8C8D;"></i>
                        <li>info@hairsurgeon.com</li><BR><br>
                        <i class="fa fa-globe fa-lg fa-color " style="color: #7F8C8D;"></i>
                        <li>www.hairsurgeonindia.com </li><BR><br>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-12">
                    <h3> Site Map </h3>
                    <ul>
                        <li> <a href="#" class="underline-remove-on-hover"> Why Transplant ? </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Hair Surgeon </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Why Us ? </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Treatments </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Gallery </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Video </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Training </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Connect </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-12">
                    <h3> Media Links </h3>
                    <ul>
                        <li> <a href="#" class="underline-remove-on-hover"> Calculate Your Cost </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> FAQ </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Blog </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Careers </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Privacy Policy </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> Terms & Conditios </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay In Touch </h3>
                    <ul class="social"><br> 
                        <li> <a href="#" class="underline-remove-on-hover"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#" class="underline-remove-on-hover"> <i class="fa fa-pinterest">   </i> </a> </li>
                        
                    </ul></div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 "><br/>
                    <ul>

                        <li>
                            <p> Sign Up For Newsletter </p>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full" placeholder="Enter your E-mail Id Here"><br><br>
                                <button class="btn  bg-gray pull-right" type="button"> SUBMIT </button>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
   <!--FOOTER END-->

   <!--BOTTOM FOOTER START-->
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left" id="footer-bottom-text"> Hair Surgeon India  &copy; | All Rights Reserved</p>
            <div class="pull-right">
                <p class="pull-left text-color"> Designs & Developed by <a href="http://www.welkindesigns.com" class="welkin-text"> Welkin Designs </a></p>
            </div>
        </div>
    </div>
</footer>
   <!--BOTTOM FOOTER END-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    // When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 8000,
  });
});
      $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});

    /* ------- Preloader ------ */
jQuery(window).load(function() {
    jQuery(".status").fadeOut();
    jQuery(".preloader").fadeOut("fast");
});

/*---on click outside the nav menu close nav menu*/
$(document).click(function(e) {
  if (!$(e.target).is('a')) {
      $('.collapse').collapse('hide');      
    }
});

    </script>
    
  </body>
</html>