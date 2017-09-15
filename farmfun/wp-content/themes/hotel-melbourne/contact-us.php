<?php
   /**
    * Template Name: Contact Us
    */
   ?>
<?php get_header(); ?>
<br><br><br><br><br><br><br><br>
<div class="container">

         <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
             <h3 class="contact-title text-center" style="margin-left: 20px;text-align:center;font-size:25px;">Contact Form</h3>   
            <br><br>
         </div>

   <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
         <form id="contact-us" method="post" action="#">

           
                  <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                     <br><br>
                  <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" /><br><br>
               <!-- Subject -->
               <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" /><br><br>
               <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>

          </form><br><br>
             <!-- Bottom Submit -->
            <div class="relative fullwidth col-xs-12">
               <!-- Send Button -->
               <button type="submit" id="submit" name="submit" class="form-btn semibold" style="float: left;">Send Message</button> 
               <br><br><br><br><br>
            </div>
            
         <!-- Your Mail Message -->
         <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
               <strong>Thank You !</strong> Your email has been delivered.
            </div>
         </div>
   </div>
   <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
         <form id="contact-us" method="post" action="#">

            
               <ul class="fa-ul contact-info">
                  <br>
                  <li><i class="fa fa-map-marker fa-lg fa-color"></i>Postal Address :<br><span style="margin-left:30px;padding:10px;"> Jai Mata Di bungalow. Aundhe road. Kusgaon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wadi, Lonavala, 410401 Taluka - Mawal, Pune. </li>
                  </span>
               </ul>
               <ul class="fa-ul contact-info">
                  <br>
                  <li><i class="fa fa-mobile fa-lg fa-color"></i>Phone:<br><span style="margin-left:25px;padding:10px;">93707 25000 </li>
                  </span>
               </ul>
               <ul class="fa-ul contact-info">
                  <br>
                  <li><i class="fa fa-mobile fa-lg fa-color">&nbsp;&nbsp;</i>Phone:<br><span style="margin-left:35px;padding:10px;">9595952389 </li>
                  </span>
               </ul>
               <ul class="fa-ul contact-info">
                  <br>
                  <li><i class="fa fa-envelope-o fa-lg fa-color"></i>Email:<br><span style="margin-left:35px;padding:10px;">info@farmfun.in </li>
                  </span>
               </ul>
               <ul class="fa-ul contact-info">
                  <br>
                  <li><i class="fa fa-globe fa-lg fa-color"></i>Website:<br><span style="margin-left:35px;padding:10px;">http://farmfun.in
                  </li>
                  </span>
               </ul>
          </form>
   </div>
</div>
           
        
        

<!-- End Inner -->
<br><br><br><br>
<?php get_footer(); ?>  