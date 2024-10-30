<?php

// Register settings
function Joinup_register_settings()
{
  register_setting( 'Joinup_settings_group', 'Joinup_settings' );
}
add_action( 'admin_init', 'Joinup_register_settings' );

// Delete options on uninstall
function Joinup_uninstall()
{
  delete_option( 'Joinup_settings' );
}
register_uninstall_hook( __FILE__, 'Joinup_uninstall' );


?>
