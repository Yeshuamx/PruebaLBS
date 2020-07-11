<?php
/**
 * The template for displaying content of archive page meetings
 *
 * This template can be overridden by copying it to yourtheme/video-conferencing-zoom/content-meeting.php.
 *
 * @author Deepen
 * @since  3.0.0
 */

defined( 'ABSPATH' ) || exit;

$zoom = get_post_meta( get_the_ID(), Maxcoach_Zoom_Meeting::POST_META_MEETING_ZOOM_DETAILS, true );
?>
<div id="dpn-zvc-<?php the_ID(); ?>" <?php post_class( 'grid-item' ) ?>>
	<a href="<?php the_permalink(); ?>" class="zvc-wrapper maxcoach-box link-secret">

		<div class="zvc-loop-thumbnail maxcoach-image">
			<?php if ( has_post_thumbnail() ): ?>
				<?php Maxcoach_Image::the_post_thumbnail( [ 'size' => '480x298' ] ); ?>
			<?php else: ?>
				<?php Maxcoach_Templates::image_placeholder( 480, 298 ); ?>
			<?php endif; ?>
		</div>

		<div class="zvc-caption">
			<h3 class="zvc-loop-title"><?php the_title(); ?></h3>

			<div class="zvc-loop-zoom-id">
				<span class="label"><?php esc_html_e( 'Meeting ID: ', 'maxcoach' ); ?></span>
				<span class="value primary-color"><?php echo esc_html( $zoom->id ); ?></span>
			</div>

			<div class="zvc-loop-meta">
				<?php if ( ! empty( $zoom->start_time ) ) { ?>
					<div class="zvc-meta zvc-loop-start-time">
						<span class="meta-icon far fa-calendar"></span>
						<span
							class="meta-value start-date"><?php echo date( 'F j, Y', strtotime( $zoom->start_time ) ); ?></span>
						<span
							class="meta-value start-time"><?php echo date( 'g:i A', strtotime( $zoom->start_time ) ); ?></span>
					</div>
				<?php } ?>

				<?php if ( ! empty( $zoom->duration ) ) : ?>
					<div class="zvc-meta zvc-loop-duration">
						<span class="meta-icon far fa-clock"></span>
						<span
							class="meta-value"><?php echo esc_html( Maxcoach_Datetime::convertToHoursMinutes( $zoom->duration ) ); ?></span>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</a>
</div>
