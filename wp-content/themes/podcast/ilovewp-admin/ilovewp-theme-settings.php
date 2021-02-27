<?php
/**
 * Define Constants
 */
define('ILOVEWP_SHORTNAME', 'podcast'); 
define('ILOVEWP_PAGE_BASENAME', 'podcast-doc'); 

/**
 * Specify Hooks/Filters
 */
add_action( 'admin_menu', 'ilovewp_add_menu' );

/**
* The admin menu pages
*/
function ilovewp_add_menu(){
	
	add_theme_page( __('Podcast Theme','podcast'), __('Podcast Theme','podcast'), 'manage_options', ILOVEWP_PAGE_BASENAME, 'ilovewp_settings_page_doc' ); 

}

// ************************************************************************************************************

/*
 * Theme Documentation Page HTML
 * 
 * @return echoes output
 */
function ilovewp_settings_page_doc() {
	// get the settings sections array
	$theme_data = wp_get_theme();
	?>
	
	<div class="ilovewp-wrapper">
		<div class="ilovewp-header">
			<div id="ilovewp-theme-info">
				<p><?php 

					echo sprintf( 
					/* translators: Theme name and version */
					__( '<span class="theme-name">%1$s Theme</span> <span class="theme-version">(version %2$s)</span>', 'podcast' ), 
					esc_html($theme_data->name),
					esc_html($theme_data->version)
					); ?></p>
					<p class="theme-buttons"><a class="button button-primary" href="https://www.ilovewp.com/themes/podcast/" rel="noopener" target="_blank"><?php esc_html_e('Theme Details','podcast'); ?></a>
				<a class="button button-primary" href="https://demo.ilovewp.com/?theme=podcast" rel="noopener" target="_blank"><?php esc_html_e('Podcast Live Demo','podcast'); ?></a>
				<a class="button button-primary ilovewp-button ilovewp-button-youtube" href="https://youtu.be/-vHV7_FpFLY" rel="noopener" target="_blank"><span class="dashicons dashicons-youtube"></span> <?php esc_html_e('Podcast Video Guide','podcast'); ?></a></p>
			</div><!-- #ilovewp-theme-info --><!-- ws fix
			--><div id="ilovewp-logo">
				<a href="https://www.ilovewp.com/" target="_blank" rel="noopener"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/ilovewp-admin/images/ilovewp-options-logo.png" width="153" height="33" alt="<?php esc_attr_e('ILoveWP.com Logo','podcast'); ?>" /></a>
			</div><!-- #ilovewp-logo -->
		</div><!-- .ilovewp-header -->
		
		<div class="ilovewp-documentation">
			<div class="ilovewp-theme-intro">

				<?php
				$message = sprintf( __( 'Thank you for installing Podcast', 'podcast' ) );
				printf( '<h2>%s</h2>', $message );
				?>

			</div>

			<ul class="ilovewp-doc-columns clearfix">
				<li class="ilovewp-doc-column ilovewp-doc-column-1">
					<div class="ilovewp-doc-column-wrapper">
						<div class="doc-section">
							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-editor-help"></span><span class="ilovewp-title-text"><?php esc_html_e('Podcast Documentation and Support','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">
								<p><?php 
								echo sprintf( 
								/* translators: Theme name and link to WordPress.org Support forum for the theme */
								__( 'Support for %1$s Theme is provided in the official WordPress.org community support forums. ', 'podcast' ), 
								esc_html($theme_data->name)	); ?></p>

								<p class="doc-buttons"><a class="button button-primary" href="https://www.ilovewp.com/documentation/podcast/" rel="noopener" target="_blank"><?php esc_html_e('View Podcast Documentation','podcast'); ?></a> <a class="button button-secondary" href="https://wordpress.org/support/theme/podcast/" rel="noopener" target="_blank"><?php esc_html_e('Go to Podcast Support Forum','podcast'); ?></a></p>

							</div><!-- .ilovewp-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<div class="doc-section">

							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-youtube"></span><span class="ilovewp-title-text"><?php esc_html_e('Podcast Theme Video Tutorial','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">
							
								<p><strong><?php esc_html_e('Click the image below to open the video guide in a new browser tab.','podcast'); ?></strong></p>
								<p><a href="https://youtu.be/-vHV7_FpFLY" rel="noopener" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/ilovewp-admin/images/podcast-video-preview.jpg" class="video-preview" alt="<?php esc_attr_e('Podcast Theme Video Tutorial','podcast'); ?>" /></a></p>

							</div><!-- .ilovewp-doc-column-text-wrapper-->

						</div><!-- .doc-section -->
						<div class="doc-section">
							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-email-alt"></span><span class="ilovewp-title-text"><?php esc_html_e('Contact the Developer','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">
								<p><?php esc_html_e('You can send a direct message to the developer of the theme.','podcast'); ?></p>
								<p class="doc-buttons"><a class="button button-primary" href="https://www.ilovewp.com/contact/" rel="noopener" target="_blank"><?php esc_html_e('Contact the developer','podcast'); ?></a></p>

							</div><!-- .ilovewp-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
					</div><!-- .ilovewp-doc-column-wrapper -->
				</li><!-- .ilovewp-doc-column --><li class="ilovewp-doc-column ilovewp-doc-column-2">
					<div class="ilovewp-doc-column-wrapper">
						<div class="doc-section">
							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-star-filled"></span><span class="ilovewp-title-text"><?php esc_html_e('Help me with a review or a donation','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">
								<p><?php esc_html_e('Please leave a review for Podcast on the WordPress.org website or make a donation. It helps me continue providing updates and support for this theme.','podcast'); ?></p>

								<p class="doc-buttons"><a class="button button-primary" href="https://wordpress.org/support/theme/podcast/reviews/#new-post" rel="noopener" target="_blank"><?php esc_html_e('Write a Review for Podcast','podcast'); ?></a><a class="button button-primary button-donate" href="https://www.ilovewp.com/donate/" rel="noopener" target="_blank"><?php esc_html_e('Make a Donation','podcast'); ?></a></p>

							</div><!-- .ilovewp-doc-column-text-wrapper-->
						</div><!-- .doc-section -->

						<div class="doc-section">

							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-admin-appearance"></span><span class="ilovewp-title-text"><?php esc_html_e('WordPress Themes and Resources','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">
							
								<p><?php esc_html_e('Podcast is just one of the many free WordPress themes that I have developed. ','podcast'); ?></p>
								<p><a class="button button-primary" href="https://www.ilovewp.com/theme-shops/ilovewp/" rel="noopener" target="_blank"><?php esc_html_e('See more free WordPress Themes','podcast'); ?></a></p>

								<p><?php esc_html_e('I have a great collection of guides and articles on how to create WordPress websites for: Photographers, Hotels, Schools, Universities, Churches, Museums, Doctors, Hospitals, Lawyers and other types of organizations and businesses.','podcast'); ?></p>
								<p><a class="button button-primary" href="https://www.ilovewp.com/resources/" rel="noopener" target="_blank"><?php esc_html_e('Browse the WordPress Resources','podcast'); ?></a></p>

							</div><!-- .ilovewp-doc-column-text-wrapper-->

						</div><!-- .doc-section -->

						<div class="doc-section">

							<h3 class="column-title"><span class="ilovewp-icon dashicons dashicons-cloud"></span><span class="ilovewp-title-text"><?php esc_html_e('Looking for a new web hosting provider?','podcast'); ?></span></h3>
							<div class="ilovewp-doc-column-text-wrapper">

								<p><?php esc_html_e('I have a small list of handpicked hosting providers that have a great reputation in the WordPress community.','podcast'); ?></p>
								<p><a class="button button-primary" href="https://www.ilovewp.com/resources/wordpress-hosting/" rel="noopener" target="_blank"><?php esc_html_e('Popular WordPress Hosting Providers','podcast'); ?></a></p>

						</div><!-- .doc-section -->

					</div><!-- .ilovewp-doc-column-wrapper -->
				</li><!-- .ilovewp-doc-column -->
			</ul><!-- .ilovewp-doc-columns -->

			<div style="clear: both;">

		</div><!-- .ilovewp-documentation -->

	</div><!-- .ilovewp-wrapper -->

<?php }