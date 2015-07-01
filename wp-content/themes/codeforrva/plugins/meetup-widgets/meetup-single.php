<?php 
global $event; 
$options = get_option('vs_meet_options');

if ( isset( $event->time ) ) {
	$date = date( 'l, F j @ g:i a', intval( $event->time/1000 + $event->utc_offset/1000 ) );
} else {
	$date = apply_filters( 'vsm_no_date_text', '' );
}
?>

<h3 class="next-meetup__title">Our Next Meetup</h3>
<?php if ( ! empty( $date ) ): ?>
<p class="next-meetup__date"><?php echo $date; ?></p>
<?php endif; ?>
<p class="next-meetup__location"><?php echo (isset($event->venue) ? $event->venue->name : "INM United"); ?></p>
<p class="next-meetup__attendees"><?php echo absint( $event->yes_rsvp_count ) .' '. _n( 'attendee', 'attendees', $event->yes_rsvp_count ); ?></p>

<a class="next-meetup__rsvp"
<?php
// OAuth doesn't seem to be quite working, just display a normal link for now
if ( false && !empty($options['vs_meetup_key']) && !empty($options['vs_meetup_secret']) && class_exists('OAuth')) {
	echo "href='".$event->event_url."' onclick='javascript:window.open(\"{$event->callback_url}&event=$id\",\"authenticate\",\"width=600,height=700\");return false;'";
} else {
	echo 'href="'.$event->event_url.'"';
} ?>
>RSVP Now!</a>
