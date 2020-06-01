<?php


function ap_work_experiences_activate_plugin()
{
    if (version_compare(get_bloginfo('version'), '4.5', '<')) {
        wp_die('Você precisa atualizar o WordPress para atualizar o plugin');
    }
}
