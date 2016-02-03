<?php
 $events = eo_get_events(array(
         'event_start_after'=>'today',
         'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
    ));

  if($events):
     echo '<div class="news alt-color"><h2 class="category-headline alt-color">Upcoming</h2>';
     foreach ($events as $event):
          //Check if all day, set format accordingly
          $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
          printf(
             '<h3 class="news-title"><a href="%s"> %s </a></h3> <p> %s </p>',
             get_permalink($event->ID),
             get_the_title($event->ID),
             eo_get_the_start($format, $event->ID,null,$event->occurrence_id)
          );
     endforeach;
     echo '</div>';
  endif;
 ?>
