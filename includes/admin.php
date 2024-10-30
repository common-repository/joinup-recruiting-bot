<?php

// Output the options page
function joinup_options_page()
{
    // Get options
    $options = get_option('Joinup_settings');
    
    // Check to see if Joinup is enabled
    $joinup_activated = false;
    if (esc_attr($options['joinup_enabled']) == "on") {
        $joinup_activated = true;
        wp_cache_flush();
    }
    
?>
       <div class="wrap">
        <form name="Joinup-form" action="options.php" method="post" enctype="multipart/form-data">
          <?php
    settings_fields('Joinup_settings_group');
?>

            <h1>Joinup</h1>
            <h3>Basic Options</h3>
            <?php
    if (!$joinup_activated) {
?>
               <div style="margin:10px auto; border:3px #f00 solid; background-color:#fdd; color:#000; padding:10px; text-align:center;">
                Joinup recruiting bot is currently <strong>DISABLED</strong>.
                </div>
            <?php
    }
?>
           <?php
    do_settings_sections('Joinup_settings_group');
?>

            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th width="30%" valign="top" style="padding-top: 10px;">
                        <label for="joinup_enabled">Joinup recruiting bot is:</label>
                    </th>
                    <td>
                      <?php
    echo "<select name=\"Joinup_settings[joinup_enabled]\"  id=\"joinup_enabled\">\n";
    
    echo "<option value=\"on\"";
    if ($joinup_activated) {
        echo " selected='selected'";
    }
    echo ">Enabled</option>\n";
    
    echo "<option value=\"off\"";
    if (!$joinup_activated) {
        echo " selected='selected'";
    }
    echo ">Disabled</option>\n";
    echo "</select>\n";
?>
                   </td>
                </tr>
            </table>
                <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th valign="top" style="padding-top: 10px;">
                        <label for="joinup_widget_id">Joinup bot id:</label>
                    </th>
                    <td>
                        
        <input type="text" name="Joinup_settings[joinup_widget_id]" placeholder="<!-- Joinup bot id -->" id="" value="<?php
    echo esc_attr($options['joinup_widget_id']);
?>">
                        <p style="margin: 5px 10px;">Enter your Joinup bot id.  You can find your <a href="https://app.joinup.io" target="_blank" title="Open Joinup Settings">Joinup bot id here</a>. A Free Joinup account is required to use this plugin.</p>
                    </td>
                </tr>
                </table>
            <p class="submit">
                <?php
    echo submit_button('Save Changes');
?>
           </p>
        </div>
        </form>

<?php
}
?>