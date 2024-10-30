<?php

add_action('wp_head', 'add_joinup_bot');

function add_joinup_bot()
{
  // Ignore admin, feed, robots or trackbacks
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }

  $options = get_option('Joinup_settings');

  // If options is empty then exit
  if( empty( $options ) )
  {
    return;
  }

  // Check to see if Joinup is enabled
  if ( esc_attr( $options['joinup_enabled'] ) === "on" )
  {
    $joinup_widget_id = $options['joinup_widget_id'];
    
    // Insert widget code
    if ( '' != $joinup_widget_id )
    {
      echo "<!-- Start Joinup By JoinUp: Joinup -->\n";
      echo '<script type="application/javascript">!function () {if (!window.JOINUP_WIDGET_ID) { window.JOINUP_WIDGET_ID ="'.$joinup_widget_id.'";var n, o;o = document.createElement("script");o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.joinup.io/init.js";n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);}}()</script>';
      echo "<!-- end: Joinup Code. -->\n";
    }
  }
}
?>