<?php
/**
 * The template for displaying all single elementor_library posts.
 *
 * @package Maxcoach
 * @since   1.0
 */

get_header();
?>
	<div id="page-content" class="page-content primary-menu-sub-visual">
		<div class="container">
			<div class="row">

				<div class="page-main-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>

			</div>
		</div>
	</div>
<?php
get_footer();