<?php

/*
Plugin Name: Work Experiences
Description: Um plugin simples para gerar e listar seus conhecimentos profissionais no portifóleo
Version: 1.0
Author: Alex Sousa
Author URI: https://mi7dev.com.br
Text Domain: work_experiences
*/

if (!function_exists('add_action')) {
    echo __('Este é um plugin Worpress e não tem sentido ser chamado por fora!', 'work_experiences');
    exit;
}

// Setup
define('WORK_EXPERIENCES_PLUGIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');

// Hooks
register_activation_hook(WORK_EXPERIENCES_PLUGIN_URL, 'ap_work_experiences_activate_plugin');
add_action('init', 'ap_work_experiences_init');
add_action('admin_init', 'ap_work_experiences_admin_init');
add_action('save_post_work_experiences', 'ap_work_experiences_save_post_admin', 10, 3);

// Shortcodes
