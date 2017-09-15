<?php 
function hotel_melbourne_theme_default_data()
  	{
	return $melbourne_option=array(
	
	'post_slider_enabled'=>1,
	'home_slider_title_one' => get_theme_mod('home_slider_title_one',__('Luxury hotel rooms','hotel-melbourne')),
	'home_slider_desc_one' => get_theme_mod('home_slider_desc_one',__('Hotel room`s with awesome facility','hotel-melbourne')),
	'home_slider_image_one' => HOTEL_MELBOURNE_DIR_URI.'/images/slide/1.jpg',
	//Title strip image
	'title_strip_img'=> HOTEL_MELBOURNE_DIR_URI.'/images/page-header-bg.jpg',
	
	'home_slider_title_two' => get_theme_mod('home_slider_title_two',__('Luxury hotel rooms','hotel-melbourne')),
	'home_slider_desc_two' => get_theme_mod('home_slider_desc_two',__('Hotel room`s with awesome facility','hotel-melbourne')),
	'slider_image_two' => HOTEL_MELBOURNE_DIR_URI.'/images/slide/2.jpg',
	
	'home_slider_title_three' => get_theme_mod('home_slider_title_three',__('Luxury hotel rooms','hotel-melbourne')),
	'home_slider_desc_three' => get_theme_mod('home_slider_desc_three',__('Hotel room`s with awesome facility','hotel-melbourne')),
	'slider_image_three' => HOTEL_MELBOURNE_DIR_URI.'/images/slide/3.jpg',
	
	'header_text_enabled' => 1,
	'header_info_phone' =>get_theme_mod('header_info_phone',__('(2)245 23 68','hotel-melbourne')),
	'header_info_mail'=> get_theme_mod('header_info_mail',__('exampl@gmail.com','hotel-melbourne')),	
	
	'melbourne_custom_css'=> '',
		
	'footer_customization_text' => get_theme_mod('footer_customization_text',__('@ 2016 hotel-melbourne Theme','hotel-melbourne')),
	'footer_customization_develop' => get_theme_mod('footer_customization_develop',__('Developed By','hotel-melbourne')),
	'develop_by_name' => get_theme_mod('develop_by_name',__('Asia Themes ','hotel-melbourne')),
	'develop_by_link' => get_theme_mod('develop_by_link',__('http://asiathemes.com/','hotel-melbourne')),
	'header_social_media_enabled' => 1,
	'social_media_twitter_link' => '#',
	'social_media_facebook_link' => '#',
	'social_media_google_link' => '#',
	'social_media_linkedin_link' => '#',
	'facebook_media_enabled' => 0,
	'twitter_media_enabled' => 0,
	'linkedin_media_enabled' => 0,
	'google_media_enabled' => 0,
	//Title strip image
	'footer_bg_image'=> HOTEL_MELBOURNE_DIR_URI.'/images/bedroom.jpg',
	
	);
  	}
  ?>