<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App_Controller extends CI_Controller
{
    protected $current_db_version;

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        $GLOBALS['EXT']->call_hook('pre_controller_constructor');

        /*
            if(!$this->input->is_ajax_request()){
                $this->output->enable_profiler(TRUE);
            }
        */

        /**
         * Fix for users who don't replace all files during update !!!
         */
        if ( file_exists(APPPATH . 'vendor/autoload.php')) {
            require_once(APPPATH . 'vendor/autoload.php');
        }
        hooks()->do_action('app_init');
        hooks()->do_action('public_init');
    }
}
