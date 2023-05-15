<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Construction Light
 * @subpackage Construction Bell
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'construction-bell' ); ?></a>

<?php
	$slider_class = "";
	if( is_front_page() ){ 

        $bannerslider = get_theme_mod('construction_light_banner_slider_section', 'enable');

		if ($bannerslider == 'enable') {

            $type = get_theme_mod('construction_light_slider_type', 'default');
            /**
    	     * Hook -  construction_light_action_banner_slider
    	     *
    	     * @hooked construction_light_banner_slider - 25
    	     */
            if($type == 'default'){

    	        $all_slider = get_theme_mod('construction_light_slider');

				$banner_slider = json_decode( $all_slider );
				if ($banner_slider && !($banner_slider[0]->slider_page) ) {
					$slider_class = "noslider";
				}else{
					do_action('construction_light_action_banner_slider');
				}
		


            }else{

                $all_slider = get_theme_mod('construction_light_sliders');

				$banner_slider = json_decode( $all_slider );
				if ($banner_slider && !($banner_slider[0]->image) ) {
					$slider_class = "noslider";
				}else{
					do_action('construction_light_action_advance_banner_slider');
				}
            }
        }else{
			$slider_class = "noslider";
		}
	}

	
?>

<header id="masthead" class="site-header headerone <?php echo esc_attr($slider_class); ?>">
    <div class="nav-classic">
	    <div class="container">
	        <div class="row">
	        	<div class="col-md-12">
		        	<div class="header-middle-inner">
		            	<div class="contact-info">
						    <div class="quickcontact">
					        	<?php
					        		$phone_number  = get_theme_mod('construction_light_contact_num');
						            $phonenumber   = preg_replace('/\D+/','', $phone_number );
						            $email_address = get_theme_mod('construction_light_email');
						            $map_address   = get_theme_mod('construction_light_address');

					            if(!empty( $phone_number )) { ?>
				                	<div class="get-tuch">
				                	    <i class="fas fa-phone-volume"></i>
				                	    <ul>
				                	        <li>
				                	            <p>
												   <!-- <?php esc_html_e('Call US Today','construction-light'); ?> -->
												   	<a href="tel:<?php if($phone_number[0] == '+') echo '0'; echo esc_attr( $phonenumber ); ?>">
		        			                            <?php echo esc_html( $phone_number ); ?>
		        			                        </a>
		        			                    </p>
				                	        </li>
				                	    </ul>
				                	</div>
					            <?php } ?>

					            <div class="site-branding">
									<div class="brandinglogo-wrap">
										<?php the_custom_logo(); ?>
										<h1 class="site-title">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
												<?php bloginfo( 'name' ); ?>
											</a>
										</h1>
										<?php 
											$construction_light_description = get_bloginfo( 'description', 'display' );
											if ( $construction_light_description || is_customize_preview() ) : ?>
												<p class="site-description"><?php echo $construction_light_description; /* WPCS: xss ok. */ ?></p>
										<?php endif; ?>
									</div>
									<?php do_action('construction_light_menu_toggle'); ?><!-- Mobile navbar toggler  -->
								</div> <!-- .site-branding -->  

					            <?php if(!empty( $email_address )) { ?>
				            		<div class="get-tuch">
										<i class="fas fa-at"></i>
				            		    <ul>
				            		        <li>
				            		            <p>
													<!-- <?php esc_html_e('Email','construction-light'); ?> -->
				            		            	<a href="mailto:<?php echo esc_attr( antispambot( $email_address ) ); ?>">
									                    
									                    <?php echo esc_html( antispambot( $email_address ) ); ?>
									                </a>
				            		            </p>
				            		        </li>
				            		    </ul>
				            		</div>
					            <?php }  ?>
						    </div> <!--/ End Contact -->
						</div>
			        </div>					
					<div class="nav-menu">
						<nav class="box-header-nav main-menu-wapper" aria-label="<?php esc_attr_e( 'Main Menu', 'construction-light' ); ?>" role="navigation">
							<?php
								wp_nav_menu( array(
										'theme_location'  => 'menu-1',
										'menu'            => 'primary-menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'main-menu',
									)
								);
							?>
			            </nav>

			            <div class="extralmenu-wrap">
							<ul>
								<li class="menu-item-search"><a class="searchicon" href="javascript:void(0)"><i class="fas fa-search"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
	        </div><!-- .row end -->
	    </div><!-- .container end -->
	</div>

</header><!-- #masthead -->

<?php
    $breadcrumbs_enable = get_theme_mod('construction_light_enable_breadcrumbs', 'enable');

    if ($breadcrumbs_enable == 'enable') {

        if (!is_front_page() && !is_home()) {
            /**
             * @hook construction_light_breadcrumbs.
             *
             * @hooked construction_light_breadcrumbs.
             *
             */
            do_action('construction_light_breadcrumbs');
        }
    }
?>

	<div id="content" class="site-content">