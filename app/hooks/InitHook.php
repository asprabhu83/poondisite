<?php

defined('BASEPATH') or exit('No direct script access allowed');

function _app_init_load()
{
    $ci = &get_instance();

    $ci->load->library([
        'assets/app_scripts',
        'assets/app_css',
        'app_object_cache',
    ]);
}

function _app_init()
{
    $ci = &get_instance();

    _app_init_load();

    hooks()->do_action('modules_loaded');
}
