<?php
/**
 * Template part for displaying header menu
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package purea-magazine
 */

?>

<?php
	$page_val = is_front_page() ? 'home' : 'page' ;
?>
<header id="<?php echo esc_attr($page_val); ?>-inner" class="elementor-menu-anchor theme-menu-wrapper full-width-menu style-pf page" role="banner">
	<?php
		if(true===get_theme_mod('purea_magazine_enable_highlight_area',true) && is_front_page()) {
			?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'purea-magazine' ); ?></a><?php
		}
		else{
			?><a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'purea-magazine' ); ?></a><?php
		}
	?>
	<div id="header-main" class="header-wrapper">
		<div class="container">
			<div class="clearfix"></div>
			<div class="top">
				<div class="logo">
	       			<?php 
	       				if (has_custom_logo()){
		                	purea_magazine_custom_logo();
		                }	                		                	
	                ?>
	                <?php 
	                    $alt_logo=esc_url(get_theme_mod( 'purea_magazine_sticky_logo' ));
	                	if(!empty($alt_logo)) {
		                	?>
		                		<a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo esc_url( get_theme_mod( 'purea_magazine_sticky_logo' ) ); ?>" alt="logo"></a>
		                	<?php
		                }		                
		            ?>
	                <?php
		                $show_title   = ( true === get_theme_mod( 'purea_magazine_display_site_title_tagline', true ) );
						$header_class = $show_title ? 'site-title' : 'screen-reader-text';
						if(!empty(get_bloginfo( 'name' ))) {
							if ( is_front_page() || is_home() ) {
						        ?>
		                			<h1 class="<?php echo esc_attr( $header_class ); ?>">
								        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
								    </h1>

								<?php

								if(true === get_theme_mod( 'purea_magazine_display_site_title_tagline', true )) {
									$description = esc_html(get_bloginfo( 'description', 'display' ));
							        if ( $description || is_customize_preview() ) { 
							            ?>
							                <p class="site-description"><?php echo $description; ?></p>
							            <?php 
							        }
								}
							}
							else {
								?>
									<p class="<?php echo esc_attr( $header_class ); ?>">
								        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
								    </p>
								<?php

								if(true === get_theme_mod( 'purea_magazine_display_site_title_tagline', true )) {
									$description = esc_html(get_bloginfo( 'description', 'display' ));
							        if ( $description || is_customize_preview() ) { 
							            ?>
							                <p class="site-description"><?php echo $description; ?></p>
							            <?php 
							        }
								}
							}
						}
	                ?>
				</div>	
				<div class="section-right">
					<?php 
						if(true===get_theme_mod('purea_magazine_enable_top_bar',true)) :
							if(is_rtl()) {
								?>
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="social">
												<?php
								                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_social_icons',false)){
								                        ?>
								                            <span class="top-social-label"></span>
								                            <ul class="top-social">
								                                <?php
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_facebook_icon',false)){
								                                        ?>
								                                            <li class="facebook-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_facebook_icon_url', '#' ) ); ?>"><i class="fab fa-facebook-f"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_twitter_icon',false)){
								                                        ?>
								                                            <li class="twitter-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_twitter_icon_url', '#' ) ); ?>"><i class="fab fa-twitter"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_instagram_icon',false)){
								                                        ?>
								                                            <li class="instagram-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_instagram_icon_url', '#' ) ); ?>"><i class="fab fa-instagram"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_linkedin_icon',false)){
								                                        ?>
								                                            <li class="linkedin-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_linkedin_icon_url', '#' ) ); ?>"><i class="fab fa-linkedin-in"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_pinterest_icon',false)){
								                                        ?>
								                                            <li class="pinterest-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_pinterest_icon_url', '#' ) ); ?>"><i class="fab fa-pinterest"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_youtube_icon',false)){
								                                        ?>
								                                            <li class="youtube-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_youtube_icon_url', '#' ) ); ?>"><i class="fab fa-youtube"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_behance_icon',false)){
					                                                    ?>
					                                                        <li class="behance-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_behance_icon_url', '#' ) ); ?>"><i class="fab fa-behance"></i></a></li>
					                                                    <?php
				                                                	}
					                                                if(true===get_theme_mod( 'purea_magazine_enable_top_bar_github_icon',false)){
					                                                    ?>
					                                                        <li class="github-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_github_icon_url', '#' ) ); ?>"><i class="fab fa-github"></i></a></li>
					                                                    <?php
					                                                }
								                                ?>
								                            </ul>
								                        <?php
								                    }
								                ?>
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="date-column">
												<?php
								                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_date',true)){
								                        ?>
								                            <div class="date-time">
								                                <div id="date">
								                                	<?php
						                                            	if(true===get_theme_mod( 'purea_magazine_enable_top_bar_date_default_format',false)){
						                                            		?><div class="year"><?php echo wp_kses_post(date_i18n(get_option('date_format')));?></div><?php
						                                            	}
						                                            	else {
						                                            		?>
						                                            			<div class="day"><?php echo wp_kses_post(date_i18n(esc_html__('l','purea-magazine'))) ; ?></div>
								                                    			<div class="year"><?php echo wp_kses_post(date_i18n(esc_html__('F d, Y','purea-magazine'))) ; ?></div>
								                                    		<?php
						                                            	}
						                                            ?>
								                                    
								                                </div>
								                            </div>  
								                        <?php
								                    }
								                ?>
											</div>
										</div>
									</div>
								<?php
							}
							else{
								?>
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="date-column">
												<?php
								                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_date',true)){
								                        ?>
								                            <div class="date-time">
								                                <div id="date">
								                                	<?php
						                                            	if(true===get_theme_mod( 'purea_magazine_enable_top_bar_date_default_format',false)){
						                                            		?><div class="year"><?php echo wp_kses_post(date_i18n(get_option('date_format')));?></div><?php
						                                            	}
						                                            	else {
						                                            		?>
						                                            			<div class="day"><?php echo wp_kses_post(date_i18n(esc_html__('l','purea-magazine'))) ; ?></div>
								                                    			<div class="year"><?php echo wp_kses_post(date_i18n(esc_html__('F d, Y','purea-magazine'))) ; ?></div>
								                                    		<?php
						                                            	}
						                                            ?>
								                                    
								                                </div>
								                            </div>  
								                        <?php
								                    }
								                ?>
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="social">
												<?php
								                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_social_icons',false)){
								                        ?>
								                            <span class="top-social-label"></span>
								                            <ul class="top-social">
								                                <?php
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_facebook_icon',false)){
								                                        ?>
								                                            <li class="facebook-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_facebook_icon_url', '#' ) ); ?>"><i class="fab fa-facebook-f"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_twitter_icon',false)){
								                                        ?>
								                                            <li class="twitter-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_twitter_icon_url', '#' ) ); ?>"><i class="fab fa-twitter"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_instagram_icon',false)){
								                                        ?>
								                                            <li class="instagram-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_instagram_icon_url', '#' ) ); ?>"><i class="fab fa-instagram"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_linkedin_icon',false)){
								                                        ?>
								                                            <li class="linkedin-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_linkedin_icon_url', '#' ) ); ?>"><i class="fab fa-linkedin-in"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_pinterest_icon',false)){
								                                        ?>
								                                            <li class="pinterest-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_pinterest_icon_url', '#' ) ); ?>"><i class="fab fa-pinterest"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_youtube_icon',false)){
								                                        ?>
								                                            <li class="youtube-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_youtube_icon_url', '#' ) ); ?>"><i class="fab fa-youtube"></i></a></li>
								                                        <?php
								                                    }
								                                    if(true===get_theme_mod( 'purea_magazine_enable_top_bar_behance_icon',false)){
					                                                    ?>
					                                                        <li class="behance-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_behance_icon_url', '#' ) ); ?>"><i class="fab fa-behance"></i></a></li>
					                                                    <?php
				                                                	}
					                                                if(true===get_theme_mod( 'purea_magazine_enable_top_bar_github_icon',false)){
					                                                    ?>
					                                                        <li class="github-icon"><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'purea_magazine_top_bar_github_icon_url', '#' ) ); ?>"><i class="fab fa-github"></i></a></li>
					                                                    <?php
					                                                }
								                                ?>
								                            </ul>
								                        <?php
								                    }
								                ?>
											</div>
										</div>
									</div>
								<?php
							}
						endif;
					?>	
				</div>
			</div>
		</div>
		<div class="top-menu-wrapper">
			<div class="container">
				<div class="menu-sidebar">
					<?php
						if(true===get_theme_mod('purea_magazine_enable_menu_left_sidebar',false)) :
							?>
								<ul class="menu-left-modal">
									<li>
										<label class="modal-left" data-toggle="modal" data-target="#pmModal">
			    							<span class="sr-only"></span>
									      	<span class="icon-bar"></span>
									       	<span class="icon-bar"></span>
									       	<span class="icon-bar"></span>
		    							</label>
		    						</li>
	    						</ul>
							<?php
						endif;
					?>
				</div>
				<nav class="top-menu" role="navigation" aria-label="<?php esc_attr_e( 'primary', 'purea-magazine' ); ?>">
					<div class="menu-header">
						<span><?php esc_html_e('MENU','purea-magazine'); ?> </span>
				     	<button type="button" class="hd-bar-opener navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       	<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'purea-magazine' ); ?></span>
					      	<span class="icon-bar"></span>
					       	<span class="icon-bar"></span>
					       	<span class="icon-bar"></span>
				     	</button>
				   	</div>
					<div class="navbar-collapse collapse clearfix" id="navbar-collapse-1">
				   		<?php
			                wp_nav_menu( array(			                  	
			                  	'theme_location'    => 'primary',
			                  	'depth'             => 3,
			                  	'container'         => 'ul',
			                  	'container_class'   => 'navigation',
			                  	'container_id'      => 'menu-primary',
			                  	'menu_class'        => 'navigation',
			                  	)
			                );
		             	?>							
				   	</div>
				</nav>
			</div>
        </div>
    </div>
</header>
<?php
	if(true===get_theme_mod('purea_magazine_enable_menu_left_sidebar',false)) {
		/**
        * Hook - purea_magazine_action_left_modal_content
        *
        * @hooked purea_magazine_left_modal_content - 10
        */
        do_action( 'purea_magazine_action_left_modal_content' );
	}
?>

<!-- Side Bar -->
<section id="hd-left-bar" class="hd-bar left-align mCustomScrollbar" data-mcs-theme="dark">
    <div class="hd-bar-closer">
        <button><span class="qb-close-button"></span></button>
    </div>
    <div class="hd-bar-wrapper">
        <div class="side-menu">
        	<?php
		    	/**
		        * Hook - purea_magazine_action_search_content
		        *
		        * @hooked purea_magazine_search_content - 10
		        */
		        do_action( 'purea_magazine_action_search_content' );
		    ?>
        	<nav role="navigation">
	            <div class="side-navigation clearfix" id="navbar-collapse-2">
			   		<?php
		                wp_nav_menu( array(			                  	
		                  	'theme_location'    => 'primary',
		                  	'depth'             => 3,
		                  	'container'         => 'ul',
		                  	'container_class'   => 'navigation',
		                  	'container_id'      => 'menu-primary-mobile',
		                  	'menu_class'        => 'navigation',
		                  	)
		                );
	             	?>							
			   	</div>
			</nav>
        </div>
    </div>
</section>

<?php
	if(true===get_theme_mod('purea_magazine_enable_trending_news',true)) {

		/**
        * Hook - purea_magazine_action_trending_news
        *
        * @hooked purea_magazine_trending_news - 10
        */
        do_action( 'purea_magazine_action_trending_news' );
	}
?>

<div class="clearfix"></div>
<div id="content" class="elementor-menu-anchor"></div>

<?php
	if(true===get_theme_mod('purea_magazine_enable_highlight_area',true)) {
		/**
	    * Hook - purea_magazine_action_highlight_area
	    *
	    * @hooked purea_magazine_highlight_area - 10
	    */
	    do_action( 'purea_magazine_action_highlight_area' );
	}
?>
<div class="content-wrap">
	<div class="container">