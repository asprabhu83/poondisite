<?php

defined('BASEPATH') or exit('No direct script access allowed');

hooks()->add_action('public_init', 'init_public_assets');

function init_public_assets()
{
    $CI        = &get_instance();
    $groupName = 'public';
    if (ENVIRONMENT == 'production') {
        $CI->app_css->add('style', 'assets/minify/main.css', $groupName);
        
        $CI->app_scripts->add('jquery', 'assets/slider/jquery.js', $groupName);
        $CI->app_scripts->add('wowslider', 'assets/slider/wowslider.js', $groupName);
        $CI->app_scripts->add('slider-script', 'assets/slider/script.js', $groupName);
        $CI->app_scripts->add('bootstrap.min', 'assets/js/bootstrap.min.js', $groupName);
        $CI->app_scripts->add('core.min', 'assets/js/core.min.js', $groupName);
        $CI->app_scripts->add('script-js', 'assets/js/script.js', $groupName);
                // $CI->app_scripts->add('script-js', base_url($CI->app_scripts->core_file('assets/js', 'script.js')) . '?v=' . $CI->app_css->core_version(), $groupName);

    } else {

        $CI->app_css->add('bootstrap.min', 'assets/css/bootstrap.min.css', $groupName);
        $CI->app_css->add('css_f6515610', 'assets/css/css_f6515610.css', $groupName);
        $CI->app_css->add('style', base_url($CI->app_css->core_file('assets', 'css/style.css')) . '?v=' . $CI->app_css->core_version(), $groupName);


        $CI->app_scripts->add('jquery', 'assets/slider/jquery.js', $groupName);
        $CI->app_scripts->add('wowslider', 'assets/slider/wowslider.js', $groupName);
        $CI->app_scripts->add('script', 'assets/slider/script.js', $groupName);
        $CI->app_scripts->add('bootstrap.min', 'assets/js/bootstrap.min.js', $groupName);
        $CI->app_scripts->add('core.min', 'assets/js/core.min.js', $groupName);
        $CI->app_scripts->add('script-js', base_url($CI->app_scripts->core_file('assets/js', 'script.js')) . '?v=' . $CI->app_css->core_version(), $groupName);
    }
}

/**
 * Init public head
 * @param  boolean $aside should include aside
 */
function init_public_head()
{
    $CI = &get_instance();
    $CI->load->view('public/includes/header');
}
/**
 * Init public footer/tails
 */
function init_public_tail()
{
    $CI = &get_instance();
    $CI->load->view('public/includes/footer');
}
/**
 * Init public scripts
 */
function init_public_scripts()
{
    $CI = &get_instance();
    $CI->load->view('public/includes/scripts');
}

function app_compile_css($group = 'admin')
{
    return get_instance()->app_css->compile($group);
}

function app_compile_scripts($group = 'admin', $attri = [])
{
    return get_instance()->app_scripts->compile($group, $attri);
}

/**
 * Return application version formatted
 * @return string
 */
function get_assets_version()
{
    $CI = &get_instance();
    $CI->load->config('migration');

    return $CI->config->item('migration_assets_version');
}

/**
 * Return Set Company Name
 * @return string
 */
function get_company_name()
{
    return 'Sri Pushpam College';
}

/**
 * News and Events
 * @return string
 */
function get_news_events()
{
    $data = [
        [
            'name'      => 'Outcome of Board Meeting-15.06.2020',
            'href'      => base_url('public/pdf/Outcome_of_Board_Meeting-15.06.2020.pdf'),
            'new'       => datevalid('2020-06-20 09:45:00'),
        ],
        [
            'name'      => 'BSE Intimation for Board Meeting 15.06.2020',
            'href'      => base_url('public/pdf/BSE_Intimation_for_Board_Meeting-15.06.2020.pdf'),
            'new'       => datevalid('2020-06-20 25:19:00'),
        ],
        // [
        //     'name'      => 'Press Release Financial Statements',
        //     'href'      => base_url('public/pdf/Press_release_Financial_Statements.pdf'),
        //     'new'       => false,
        // ],
        // [
        //     'name'      => 'Outcome of Board Meeting',
        //     'href'      => base_url('public/pdf/Outcome_of_Board_Meeting.pdf'),
        //     'new'       => false,
        // ],
        // [
        //     'name'      => 'Press Release',
        //     'href'      => base_url('public/pdf/Press_Release.pdf'),
        //     'new'       => false,
        // ],
    ];

    return $data;
}


function datevalid($date = '')
{
    if ($date > date('Y-m-d H:i:s')) {
        return true;
    }
    return false;
}

function galleries()
{
    $data = [
        [
            'image'      => base_url('assets/images/gallery/1.jpg'),
            'style'      => 'active',
        ],
        [
            'image'      => base_url('assets/images/gallery/2.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/3.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/4.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/5.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/6.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/7.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/8.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/9.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/10.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/11.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/12.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/13.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/14.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/15.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/16.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/17.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/18.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/19.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/20.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/21.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/22.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/23.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/24.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/25.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/26.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/27.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/28.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/29.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/30.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/31.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/32.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/33.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/34.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/35.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/36.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/37.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/38.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/39.jpg'),
            'style'      => null
        ],
        [
            'image'      => base_url('assets/images/gallery/40.jpg'),
            'style'      => null
        ],


    ];

    return $data;
}

function department_quicklinks()
{
    echo '<h4 class="text-ubold inset-left-20 offset-top-30">DEPARTMENT QUICK LINKS</h4>
    <div class="heading-divider"></div>
    <ul class="list list-marked inset-left-30" style="font-size: 18px;">
        <ul class="list list-marked inset-left-30" style="font-size: 18px;">
            <ul class="list list-marked inset-left-30" style="font-size: 18px;">
                <ul class="list list-marked inset-right-30" style="font-size: 18px;">
                    <ul class="list list-marked inset-right-30" style="font-size: 18px;">
                        
                        <li><a href="' . base_url("history") . '" class="text-matrix"><strong>History </strong></a></li>
                        <li><a href="' . base_url("economics") . '" class="text-matrix"><strong>Economics </strong></a></li>
                        <li><a href="' . base_url("tamil") . '" class="text-matrix"><strong>Tamil </strong></a></li>
                        <li><a href="' . base_url("english") . '" class="text-matrix"><strong>English </strong></a></li>
                        <li><a href="' . base_url("commerce") . '" class="text-matrix"><strong>Commerce </strong></a></li>
                        <li><a href="' . base_url("business_administration") . '" class="text-matrix"><strong>Business Administration </strong></a></li>
                        <li><a href="' . base_url("mathematics") . '" class="text-matrix"><strong>Mathematics </strong></a></li>
                        <li><a href="' . base_url("physics") . '" class="text-matrix"><strong>Physics </strong></a></li>
                        <li><a href="' . base_url("chemistry") . '" class="text-matrix"><strong>Chemistry </strong></a></li>
                        <li><a href="' . base_url("botany") . '" class="text-matrix"><strong>Botany </strong></a></li>
                        <li><a href="' . base_url("microbiology") . '" class="text-matrix"><strong>Microbiology </strong></a></li>
                        <li><a href="' . base_url("zoology") . '" class="text-matrix"><strong>Zoology & Biotechnology</strong></a></li>
                        <li><a href="' . base_url("computer_science") . '" class="text-matrix"><strong>Computer Science </strong></a></li>
                        <li><a href="' . base_url("physical_education") . '" class="text-matrix"><strong>Physical Education </strong></a></li>
                        <li><a href="' . base_url("library_and_information_science") . '" class="text-matrix"><strong>Library and Information Science </strong></a></li>
                        <li><a href="' . base_url("hindi") . '" class="text-matrix"><strong>Hindi </strong></a></li>
                        <li><a href="' . base_url("geography") . '" class="text-matrix"><strong>Geography </strong></a></li>
                        <li><a href="' . base_url("statistics") . '" class="text-matrix"><strong>Statistics </strong></a></li>
                    </ul>
                </ul>
            </ul>
        </ul>
    </ul>';
}

function research_quicklinks()
{
    echo '<h4 class="text-ubold inset-left-20 offset-top-30">RESEARCH QUICK LINKS</h4>
    <div class="heading-divider"></div>
    <ul class="list list-marked inset-left-30" style="font-size: 18px;">
        <ul class="list list-marked inset-left-30" style="font-size: 18px;">
            <ul class="list list-marked inset-left-30" style="font-size: 18px;">
                <ul class="list list-marked inset-right-30" style="font-size: 18px;">
                    <ul class="list list-marked inset-right-30" style="font-size: 18px;">
                        <li><a href="' . base_url("res_history") . '" class="text-matrix"><strong>History </strong></a></li>
                        <li><a href="' . base_url("res_economics") . '" class="text-matrix"><strong>Economics </strong></a></li>
                        <li><a href="' . base_url("res_tamil") . '" class="text-matrix"><strong>Tamil </strong></a></li>
                        <li><a href="' . base_url("res_english") . '" class="text-matrix"><strong>English </strong></a></li>
                        <li><a href="' . base_url("res_commerce") . '" class="text-matrix"><strong>Commerce </strong></a></li>
                        <li><a href="' . base_url("res_mathematics") . '" class="text-matrix"><strong>Mathematics </strong></a></li>
                        <li><a href="' . base_url("res_physics") . '" class="text-matrix"><strong>Physics </strong></a></li>
                        <li><a href="' . base_url("res_chemistry") . '" class="text-matrix"><strong>Chemistry </strong></a></li>
                        <li><a href="' . base_url("res_botany") . '" class="text-matrix"><strong>Botany </strong></a></li>
                        <li><a href="' . base_url("res_microbiology") . '" class="text-matrix"><strong>Microbiology </strong></a></li>
                        <li><a href="' . base_url("res_zoology") . '" class="text-matrix"><strong>Zoology & Biotechnology</strong></a></li>
                        <li><a href="' . base_url("res_computer_science") . '" class="text-matrix"><strong>Computer Science </strong></a></li>
                        <li><a href="' . base_url("res_hindi") . '" class="text-matrix"><strong>Hindi</strong></a></li>
                    </ul>
                </ul>
            </ul>
        </ul>
    </ul>';
}


function syllabus_link($file)
{
    echo '<a href="' . base_url('public/pdf/syllabus/' . $file . '.pdf') . '" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a>';
}

// function syllabus_link($name, $file)
// {
//     echo '<a href="' . base_url('public/pdf/syllabus/' . $file . '.pdf') . '" target="_blank"><strong>' . $name . '</strong></a>';
// }
