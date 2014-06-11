<?php
/**

 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php 
					require_once 'Mobile_Detect.php';
					$detect = new Mobile_Detect;
					
					if ( $detect->isMobile() ) {
					 include("donation2-page-mobile.html");
					}

					else{
					include("donation2-page.html");
					}

					?>

					<?php get_template_part( 'content', 'page' ); ?>
					
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>