<?php
/* 
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output() 
 */
global $EM_Event;
/* @var $EM_Event EM_Event */

// echo $EM_Event->output_single();
?>
<div style="float:right; margin:0px 0px 15px 15px;">#_LOCATIONMAP</div>
<p>
    <strong>Date/Time</strong><br/>
    Date(s) - #_EVENTDATES<br /><i>#_EVENTTIMES</i>
</p>
{has_location}
<p>
    <strong>Location</strong><br/>
    #_LOCATIONLINK
</p>
{/has_location}
<p>
    <strong>Categories</strong>
    #_CATEGORIES
</p>
<br style="clear:both" />
#_EVENTNOTES
{has_bookings}
<h3>Bookings</h3>
#_BOOKINGFORM
{/has_bookings}


<?php

echo '<pre>';
print_r($EM_Event->get_location());
echo '</pre>';
?>