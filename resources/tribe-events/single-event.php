<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();


the_title( '<h1 class="text-center text-black xxl:text-5xl py-5 xxl:py-10">', '</h1>' ); ?>

<div class="flex">
  <aside class='sidebar py-8 lg:w-1/3 xxl:py-12 pr-12 xxl:pr-24'>
    <!-- Event featured image, but exclude link -->
    <?php
      //echo tribe_event_featured_image( $event_id, 'full', false );

      do_action( 'tribe_events_single_event_before_the_meta' );

      tribe_get_template_part( 'modules/meta' );

      do_action( 'tribe_events_single_event_after_the_meta' );
    ?>
  </aside>
  <div class="tribe-events-single main py-8 lg:w-2/3 xxl:py-12">
    <h2 class='bold text-black text-2xl xxl:text-4xl mb-2'>About the Event</h2>
  	<!-- Notices -->
  	<?php tribe_the_notices() ?>
  		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<!-- Event content -->
  			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
  			<div class="tribe-events-single-event-description tribe-events-content">
  				<?php the_content(); ?>
  			</div>
  			<!-- .tribe-events-single-event-description -->
  			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
  		</div> <!-- #post-x -->
  </div><!-- #tribe-events-content -->
</div>
