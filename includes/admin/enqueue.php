<?php

function ap_work_experiences_admin_enqueue()
{
    global $typenow;
    if ($typenow != 'work_experiences') {
        return;
    }

    // Registers
    wp_register_style('ap_work_experiences_style', plugins_url('/assets/css/style.css', WORK_EXPERIENCES_PLUGIN_URL));

    // Using
    wp_enqueue_style('ap_work_experiences_style');
}
