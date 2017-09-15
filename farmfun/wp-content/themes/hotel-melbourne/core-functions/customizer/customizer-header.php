<?php
add_action( 'customize_register', 'hotel_melbourne_header_customizer' );
function hotel_melbourne_header_customizer( $wp_customize ) {
wp_enqueue_style('melbourne-customizr', HOTEL_MELBOURNE_DIR_URI .'/css/customizr.css');

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme Options Settings', 'hotel-melbourne'),
	) );
	$wp_customize->add_section( 'home_slider' , array(
		'title'      => __('Home Slider Section', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 19,
   	) );
	$wp_customize->add_setting(
    'melbourne_option[post_slider_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[post_slider_enabled]',
    array(
        'label' => __('Hide Home slider','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'checkbox',
    )
	);
	//Home Slider one
	$wp_customize->add_setting(
    'melbourne_option[home_slider_title_one]',
    array(
        'default' => __('Luxury hotel rooms','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_title_one]',
    array(
        'label' => __('Home slider one title','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'melbourne_option[home_slider_desc_one]',
    array(
        'default' => __('Hotel rooms with awesome facility','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_desc_one]',
    array(
        'label' => __('Home slider description one','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	$wp_customize->add_setting(
		'melbourne_option[home_slider_image_one]'
		, array(
        'default'        => HOTEL_MELBOURNE_DIR_URI.'/images/slide/1.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[home_slider_image_one]',
			   array(
				   'label'          => __( 'Upload Slider Image One', 'hotel-melbourne' ),
				   'section'        => 'home_slider',
				   //'priority'   => 145,
			   )
		   )
	);
	
	//Home Slider Two
	
	$wp_customize->add_setting(
    'melbourne_option[home_slider_title_two]',
    array(
        'default' => __('Luxury hotel rooms','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_title_two]',
    array(
        'label' => __('Home slider two title','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'melbourne_option[home_slider_desc_two]',
    array(
        'default' => __('Hotel rooms with awesome facility','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_desc_two]',
    array(
        'label' => __('Home slider description one','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	$wp_customize->add_setting(
		'melbourne_option[slider_image_two]'
		, array(
        'default'        => HOTEL_MELBOURNE_DIR_URI.'/images/slide/2.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[slider_image_two]',
			   array(
				   'label'          => __( 'Upload Slider Image Two', 'hotel-melbourne' ),
				   'section'        => 'home_slider',
				   //'priority'   => 145,
			   )
		   )
	);
	
	//Home Slider Three
	
	$wp_customize->add_setting(
    'melbourne_option[home_slider_title_three]',
    array(
        'default' => __('Luxury hotel rooms','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_title_three]',
    array(
        'label' => __('Home slider two title','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'melbourne_option[home_slider_desc_three]',
    array(
        'default' => __('Hotel rooms with awesome facility','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'text',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_slider_desc_three]',
    array(
        'label' => __('Home slider description one','hotel-melbourne'),
        'section' => 'home_slider',
        'type' => 'text',
    )
	);
	$wp_customize->add_setting(
		'melbourne_option[slider_image_three]'
		, array(
        'default'        => HOTEL_MELBOURNE_DIR_URI.'/images/slide/3.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[slider_image_three]',
			   array(
				   'label'          => __( 'Upload Slider Image three', 'hotel-melbourne' ),
				   'section'        => 'home_slider',
				   //'priority'   => 145,
			   )
		   )
	);
	
   	$wp_customize->add_section( 'header_front_data' , array(
		'title'      => __('Custom Header Settings', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 20,
   	) );
	
	//Hide Header Details
	
	$wp_customize->add_setting(
    'melbourne_option[header_text_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[header_text_enabled]',
    array(
        'label' => __('Hide Header Text','hotel-melbourne'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	$wp_customize->add_setting(
	'melbourne_option[header_info_phone]', array(
        'default'        => __('(2)245 23 68','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('melbourne_option[header_info_phone]', array(
        'label'   => __('Header Headline :', 'hotel-melbourne'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	$wp_customize->add_setting('melbourne_option[header_info_mail]'
		, array(
        'default'        => __('example@gmail.com','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[header_info_mail]', array(
        'label'   => __('Header Text :', 'hotel-melbourne'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	
	$wp_customize->add_setting(
		'melbourne_option[title_strip_img]'
		, array(
        'default'        => get_template_directory_uri().'/images/page-header-bg.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[title_strip_img]',
			   array(
				   'label'          => __( 'Upload Title Strip bg Image', 'hotel-melbourne' ),
				   'section'        => 'header_front_data',
				   //'priority'   => 150,
			   )
		   )
	);
	
	
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom css', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority' => 24,
   	) );
	$wp_customize->add_setting(
	'melbourne_option[melbourne_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[melbourne_custom_css]', array(
        'label'   => __('Custom css snippet:', 'hotel-melbourne'),
        'section' => 'custom_css',
        'type' => 'textarea',
    ));
	
	// Footer Copyright Option Settings
	$wp_customize->add_section( 'footer_copyright_setting' , array(
		'title'      => __('Footer Customization', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority' => 39,
   	) );
	
	$wp_customize->add_setting(
		'melbourne_option[footer_bg_image]'
		, array(
        'default'        => get_template_directory_uri().'/images/bedroom.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[footer_bg_image]',
			   array(
				   'label'          => __( 'Upload footer widget background image', 'hotel-melbourne' ),
				   'section'        => 'footer_copyright_setting',
				   //'priority'   => 150,
			   )
		   )
	);
	
	
	
	
	$wp_customize->add_setting(
	'melbourne_option[footer_customization_text]'
		, array(
        'default'        => __('@ 2016 hotel-melbourne Theme ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[footer_customization_text]', array(
        'label'   => __('Footer Customization Text', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));	
	
	$wp_customize->add_setting(
	'melbourne_option[footer_customization_develop]'
		, array(
        'default'        => __('Developed By ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[footer_customization_develop]', array(
        'label'   => __('Footer Customization Developed By', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'melbourne_option[develop_by_name]'
		, array(
        'default'        => __('Asia Themes ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[develop_by_name]', array(
        'label'   => __('Theme Developed By Name', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'melbourne_option[develop_by_link]'
		, array(
        'default'        => __('https://asiathemes.com/','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[develop_by_link]', array(
        'label'   => __('Theme Developed By Link', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	
	//Show and hide Header Social Icons
	$wp_customize->add_setting(
	'melbourne_option[header_social_media_enabled]'
    ,
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[header_social_media_enabled]',
    array(
        'label' => __('Hide Social icons','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'checkbox',
    )
	);

	
	

	// Facebook link
	$wp_customize->add_setting(
    'melbourne_option[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[facebook_media_enabled]',array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);

	//twitter link
	
	$wp_customize->add_setting(
    'melbourne_option[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[twitter_media_enabled]'
    ,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	//Linkdin link
	
	$wp_customize->add_setting(
	'melbourne_option[social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_linkedin_link]',
    array(
        'label' => __('Linkdin URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[linkedin_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'melbourne_option[linkedin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	//googlelink
	
	$wp_customize->add_setting(
	'melbourne_option[social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_google_link]',
    array(
        'label' => __('Google URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[google_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'esc_url_raw',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'melbourne_option[google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	// Upgrade to pro Settings
	$wp_customize->add_section( 'melbourne_pro' , array(
				'title'      	=> __( 'Upgrade to melbourne Premium', 'hotel-melbourne' ),
				'priority'   	=> 999,
				'panel'=>'header_options',
			) );

			$wp_customize->add_setting( 'melbourne_pro', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control( new More_melbourne_Control( $wp_customize, 'melbourne_pro', array(
				'label'    => __( 'melbourne Premium', 'hotel-melbourne' ),
				'section'  => 'melbourne_pro',
				'settings' => 'melbourne_pro',
				'priority' => 1,
			) ) );
} 
/* Custom Control Class */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'melbourne_Customize_Misc_Control' ) ) :
class melbourne_Customize_Misc_Control extends WP_Customize_Control {
    public $settings = 'blogname';
    public $description = '';
    public function render_content() {
        switch ( $this->type ) {
            default:
           
            case 'heading':
                echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
                break;
 
            case 'line' :
                echo '<hr />';
                break;
			
        }
    }
}
endif;
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'More_melbourne_Control' ) ) :
class More_melbourne_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:11px;" href="https://asiathemes.com/hotel-details/" target="blank" class="btn pro-btn-success btn"><?php _e('Upgrade to melbourne Premium','hotel-melbourne'); ?> </a>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="melbourne_img_responsive " src="<?php echo HOTEL_MELBOURNE_DIR_URI .'/images/melbourne.jpg'?>">
			</div>			
			<div class="col-md-3 col-sm-6">
				<h3 style="margin-top:10px;margin-left: 20px;text-decoration:underline;color:#333;"><?php echo _e( 'melbourne Premium - Features','hotel-melbourne'); ?></h3>
					<ul style="padding-top:20px">
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php _e('We have provide custom room booking facility in our primium theme','hotel-melbourne'); ?> </li>
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php _e('You can create your room booking process easily without any plugin','hotel-melbourne'); ?> </li>						
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php _e('We are provide "Cloud Slider" With multiple animations features in our premium theme','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('More then 13 Templates pages','hotel-melbourne'); ?></li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('9 types Colours Schemes','hotel-melbourne'); ?></li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('5 types Awesome Portfolio Page Templates','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('Portfolio Page Templates with awesome Photo-box Slider','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('One Latest GALLERY page portfolio template"Coming Soon"','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('Ultimate Portfolio layout with Taxonomy Tab effect','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Awesome Team page Template','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Awesome Events page Template','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Awesome Service Pages Templates','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('3 Types Of Blog Templates','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('One Year Free Support','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Google Fonts','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('Translation Ready','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php _e('Coming Soon Mode','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Responsive Design','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Patterns Background','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Full Width & Boxed Layout','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Woo-commerce Plug-in compatible is coming soon','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php _e('Awesome Shortcodes is coming soon ','hotel-melbourne'); ?>  </li>	
					
					</ul>
			</div>
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:11px;" href="https://asiathemes.com/hotel-details/" target="blank" class="btn pro-btn-success btn"><?php _e('Upgrade to melbourne Premium','hotel-melbourne'); ?> </a>
			</div>
			<span class="customize-control-title"><?php _e( 'Enjoying With melbourne', 'hotel-melbourne' ); ?></span>
			<p>
				<?php
					printf( __( 'If you Like our Products , Please do Rate us on %sWordPress.org%s?  We\'d really appreciate it!', 'hotel-melbourne' ), '<a target="" href="https://wordpress.org/support/view/theme-reviews/melbourne?filter=5">', '</a>' );
				?>
			</p>
		</label>
		<?php
	}
}
endif;