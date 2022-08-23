<?php
defined('BASEPATH') or exit('No direct script access allowed');
ENVIRONMENT == 'development' ?  ob_start() : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php if (isset($keywords) && $keywords != '') { ?>
        <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : get_company_name(); ?>">
    <?php } ?>
    <?php if (isset($description) && $description != '') { ?>
        <meta name="description" content="<?php echo isset($description) ? $description : get_company_name(); ?>">
    <?php } ?>
    <link rel=icon href="<?php echo base_url('assets/images/fav.jpg') ?>">
    <title><?php echo ((isset($title) && $title != '') ? $title . ' - ' : '') . get_company_name() ?></title>
    <?php echo app_compile_css('public'); ?>
    <link rel="stylesheet" type="text/css" defer="defer" id="poppins" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Roboto:400,500,700&display=swap">
    <link rel="stylesheet" type="text/css" defer="defer" id="Raleway" href="https://fonts.googleapis.com/css?family=Raleway">
    <script>
        var site_url = '<?php echo base_url() ?>';
    </script>
</head>

<body>
    <div class="page text-center">
        <header class="page-header">
            <div class="rd-navbar-wrap">
                <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="75px" data-lg-stick-up-offset="105px" data-auto-height="false" class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-with-panel" data-lg-auto-height="true" data-lg-layout="rd-navbar-static" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-inner">

                        <div class="rd-navbar-top-panel" style="padding: 70px;">
                            <div id="content-desktop">
                                <h5 align="center" style="color: #fff; padding-left: 40px; font-variant: small-caps; font-size: 26px; margin-top: -35px;"><strong>A. Veeriya Vandayar Memorial Sri Pushpam College (Autonomous)</strong></h5>
                                <div class="left-side">

                                    <address class="contact-info text-left" style="padding-left: 50px;">

                                        <div style="margin-bottom:55px;"><img src="<?php echo base_url('assets/images/company-logo.jpg') ?>"></div>

                                        <!-- <div class="reveal-inline-block">
                                            <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                                <div class="unit-left"><span class="icon icon-sm-size-1 text-white mdi mdi-phone"></span></div>
                                                <div class="unit-body">
                                                    <div class="p"><a href="callto:04374239328" class="text-alto">04374 - 239523 </a></div>
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="reveal-inline-block">
                                            <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                                <div class="unit-left"><span class="icon icon-sm-size-1 text-white mdi mdi-email-outline"></span></div>
                                                <div class="unit-body">
                                                    <div class="p"><a href="mailto:avvmspc@hotmail.com" class="text-alto"><span class="__cf_email__" data-cfemail="e38a8d858ca387868e8c8f8a8d88cd8c9184">avvmspc@hotmail.com </span></a></div>
                                                </div>
                                            </div>
                                        </div> 
                                                                                
                                        <div class="reveal-inline-block">
                                            <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                                                <div class="unit-left"><span class="icon icon-sm-size-1 text-white mdi mdi-map-marker"></span></div>
                                                <div class="unit-body">
                                                    <div class="p" style="color: #fff;"><strong></strong>Poondi - 613 503, Thanjavur Dt, Tamil Nadu </strong></div>
                                                </div>
                                            </div>
                                        </div> -->

                                    </address>
                                </div>

                                <div class="right-side">
                                    <ul class="list-inline list-inline-sm">
                                        <li><a href="https://www.facebook.com/spc.poondi/" target="_blank" class="icon fa fa-facebook icon-silver"></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCXrJLcudKedf1LN3uQeZGUQ" target="_blank" class="icon fa fa-youtube-play icon-silver"></a></li>
                                        <li><a href="https://virtualtourcreator.in/360demo/poondi/" target="_blank">Virtual Tour</a></li>
                                        <li><a href="https://www.linkedin.com/school/a.v.v.m.-sri-pushpam-college-poondi---613-503./" target="_blank" class="icon fa fa-linkedin-square icon-silver"></a></li>
                                        <li><a href="https://webmail.sripushpamcollege.co.in/" target="_blank" >Webmail</a></li>
                                    </ul>
                                </div>

                            </div>
                            
                            <div id="content-desktop">
                                        <h3 align="center" style="color: #fff; padding-right: 60px; font-variant: small-caps; font-size: 22px; margin-top: 15px;">Poondi - 613 503, Thanjavur Dt, Tamil Nadu</h3>
                            </div>

                            <div id="content-mobile">
                                <img src="<?php echo base_url('assets/images/company-logo.jpg') ?>">
                                <h4 style="color:#fff; font-size:14px"><br />A. Veeriya Vandayar Memorial Sri Pushpam College (Autonomous), Poondi, Thanjavur(Dt.) </h4>
                                <p style="font-size:11px;"><span class="icon icon-sm-size-1 text-white mdi mdi-phone"></span> <a href="callto:04374239523" class="text-alto">04374-239523 </a><br /><br /><span class="icon icon-sm-size-1 text-white mdi mdi-email-outline"></span><a href="mailto:avvmspc@hotmail.com" class="text-alto"><span class="__cf_email__" data-cfemail="e38a8d858ca387868e8c8f8a8d88cd8c9184"> avvmspc@hotmail.com </span></a><br /><br /><span class="icon icon-sm-size-1 text-white mdi mdi-map-marker"></span> Poondi - 613 503, Thanjavur Dt, Tamil Nadu </p>
                                <ul class="list-inline list-inline-sm">
                                    <li><a href="https://www.facebook.com/spc.poondi/" target="_blank" class="icon fa fa-facebook icon-silver"></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCXrJLcudKedf1LN3uQeZGUQ" target="_blank" class="icon fa fa-youtube-play icon-silver"></a></li>
                                    <li><a href="https://www.linkedin.com/school/a.v.v.m.-sri-pushpam-college-poondi---613-503./" target="_blank" class="icon fa fa-linkedin-square icon-silver"></a></li>
                                    
                                </ul>

                            </div>
                        </div>
                        <div class="rd-navbar-bottom-panel">
                            <div class="rd-navbar-panel">
                                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
                                <div class="rd-navbar-brand"></div>
                            </div>
                            <div class="rd-navbar-menu-wrap" style="padding-right: 0px;">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <ul class="rd-navbar-nav">
                                            <li class="active"><a href="<?php echo base_url() ?>"><span>Home </span></a>
                                            </li>
                                            <li class="active "><a href="#"><span>About Us </span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li><a href="<?php echo base_url('sripushpam-history') ?>"><span class="text-middle">Sripushpam History </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('founders') ?>"><span class="text-middle">Founders </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('committee-of-management') ?>"><span class="text-middle">Management Committee </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('vision-mission') ?>"><span class="text-middle">Vision &amp; Mission </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('principal-message') ?>"><span class="text-middle"> Principal&#039;s Message </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('former-principals') ?>"><span class="text-middle">Former Principals </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('milestones') ?>"><span class="text-middle">Milestones </span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('institutional_distinctiveness') ?>"><span class="text-middle">Distinctiveness</span></a>
                                                    </li>
                                                    <li><a href="<?php echo base_url('best_practices_page') ?>"><span class="text-middle">Best Practices</span></a>
                                                    </li>
                                                   
                                                    <!-- <li><a href="#"><span class="text-middle">Best Practices</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                        <li><a href="<?php echo base_url('best_practices1') ?>"><span class="text-middle">Best Practices-I</span></a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('best_practices2') ?>"><span class="text-middle">Best Practices-II</span></a>
                                                        </li>
                                                        </ul>
                                                    </li>  -->
                                               
                                                    
                                                    <li><a href="#"><span class="text-middle">Committees</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('statutory-committees') ?>"><span class="text-middle">Statutory Committees </span></a></li>
                                                            <li><a href="<?php echo base_url('non-statutory-committees') ?>"><span class="text-middle">Non-Statutory Committees </span></a></li>
                                                        </ul>
                                                    </li> 
                                                    <li><a href="<?php echo base_url('public/pdf/Organogram.pdf') ?>"><span class="text-middle">Organogram </span></a>
                                                    <li><a href="<?php echo base_url('public/pdf/Compliance_of_UGC_Guidelines_Regulations_2018.pdf') ?>"><span class="text-middle">Compliance of UGC Guidelines 2018 </span></a>
                                                </ul>
                                            </li>
                                            

                                            <li class="active "><a href="#"><span>Academics</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <!-- <li class="active "><a href="<?php echo base_url('programmes') ?>"><span>Programmes</span></a>
                                                    </li> -->
                                                    
                                                    <!-- <li class="active"><a href="#"><span>Department</span></a> -->
                                                    <!-- <ul class="rd-navbar-dropdown"> -->
                                                    <!-- <li class="active "><a href="<?php echo base_url('departments') ?>"><span>Faculty Members </span></a> -->
                                                    <!-- <li class="active "><a href="<?php echo base_url('staffportal') ?>"><span>Staff Portal</span></a> -->
                                                    <!-- <li class="active "><a href="<?php echo base_url('syllabus_2014_2017') ?>"><span>Syllabus</span></a> -->
                                                    <!-- </li> -->
                                                        <!-- <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> -->
                                                    <!-- </li> -->
                                                    <!-- </ul> -->
                                                    
                                                    <!-- </li> -->
                                                    <li class="active "><a href="<?php echo base_url('departments') ?>"><span>Departments </span></a>
                                                    <li class="active "><a href="<?php echo base_url('syllabus_2014_2020') ?>"><span>Syllabus</span></a>
                                                    </li>
                                                   
                                                    <li class="active "><a href="<?php echo base_url('programmes') ?>"><span>Programmes</span></a>
                                                    </li>
                                                                                                     
                                                    <li class="active "><a href="<?php echo base_url('popsoco') ?>"><span>PO, PSO & CO</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/E_Contents/e_contents.pdf') ?>"><span>E_Content</span></a>
                                                    </li>

                                                    <li class="active"><a href="#"><span>Education Ontology</span></a>
                                                         <ul class="rd-navbar-dropdown">
                                                         <li class="active "><a href="<?php echo base_url('public/pdf/Edu_ontology/user_guide.pdf') ?>"><span>User Guide</span></a>
                                                    
                                                            <li class="active "><a href="<?php echo base_url('edu_ontology') ?>"><span>Computer Science</span></a>

                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="active"><a href="#"><span>Swayam</span></a>
                                                         <ul class="rd-navbar-dropdown">
                                                            <li class="active "><a href="<?php echo base_url('swayam') ?>"><span>MOOC Intro video</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    


                                                    <!-- <li><a href="#"><span class="text-middle">Swayam</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('public/Swayam/V_Ravichandran_MOOC_Intro_Video.mp4') ?>"><span class="text-middle">MOOC Intro video - Dr.V.Ravichandran </span></a></li>
                                                            <li><a href="<?php echo base_url('public/Swayam/S_Ganesan_MOOC_Intro_Video.mp4') ?>"><span class="text-middle">MOOC Intro video - Dr.S.Ganesan </span></a></li>
                                                        </ul>
                                                    </li>  -->

                                                    <!-- <li class="active "><a href="<?php echo base_url('public/pdf/E_Contents/e_contents.pdf') ?>"><span>SWAYAM</span></a>
                                                    </li> -->
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Fees_Structure_2022_2023.pdf') ?>"><span>Fees Structure</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/GO_D_184_dated_05_08_2021.pdf') ?>"><span>Admission Procedure</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/calender_2021_2022.pdf') ?>"><span>Academic Calender 2021-22</span></a>
                                                    </li>
                                                   
                                                    <!-- <li class="active"><a href="#"><span>Programme</span></a>
                                                    <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('programmes') ?>"><span>Programmes</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('/assets/NAAC/1.1.1_Programme_outcomes.pdf') ?>"><span>Program Outcomes</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('assets/NAAC/1.1.1_Programme_specific_outcomes.pdf') ?>"><span>Program Specific Outcomes</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('course_outcome') ?>"><span>Course Outcomes</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2021.pdf') ?>"><span>NIRF 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> 
                                                    </li>
                                                    </ul>
                                                    </li> -->
                                                    
                                                </ul>
                                            </li>

                                            <li class="active"><a href="research_page"><span>Research</span></a>
                                                    <!-- <ul class="rd-navbar-dropdown">
                                                    
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/Research_policy.pdf') ?>"><span>Research policy</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/Code_of_Ethics.pdf') ?>"><span>Code of Ethics</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/Research_Ethics_Committee.pdf') ?>"><span>Research Ethics Committee</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/Research_Advisory_Committee.pdf') ?>"><span>Research Advisory Committee</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/List_of_Research_Advisors.pdf') ?>"><span>List of Research Advisors</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Research/List_of_Ph.D_Completed_Scholars.pdf') ?>"><span>List of Ph.D Completed Scholars</span></a>
                                                    <li class="active "><a href="<?php echo base_url('research') ?>"><span>Research Project</span></a>
                                                   
                                                    </li>
                                                    </ul> -->
                                            </li>



                                            <!-- <li class="active"><a href="#"><span>Research</span></a>
                                                    <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('research') ?>"><span>Research Project</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2021.pdf') ?>"><span>NIRF 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> 
                                                    </li>
                                                    </ul>
                                            </li>-->
 

                                            <!-- <li class="active "><a href="<?php echo base_url('departments') ?>"><span>Departments </span></a> -->
                                            <!-- </li> -->

                                            

                                            <li class="active"><a herf="#"><span>Campus Life</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('library') ?>"><span>Library </span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('infrastructure-facilities') ?>"><span>Infrastructure Facilities </span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('extracurricular-activities') ?>"><span>Extracurricular activities </span></a>
                                                    </li>
                                                    <li class="active"><a href="<?php echo base_url('scholarships') ?>"><span>Scholarships</span></a></li>
                                                    <li class="active "><a href="<?php echo base_url('placement') ?>"><span>Placement </span></a>
                                                    </li>
                                                    
                                                    <li class="active"><a href="#"><span>PEDC</span></a>
                                                         <ul class="rd-navbar-dropdown">
                                                            <li class="active "><a href="<?php echo base_url('pedc') ?>"><span>About PEDC</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li class="active "><a href="http://www.avvmspclms.com/d" target="_blank"><span>LMS </span></a>
                                                    </li>
                                                    
                                                    <li class="active"><a href="#"><span>CELL</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <!-- <li class="active "><a href="<?php echo base_url('pedc') ?>"><span>About CELL</span></a> -->
                                                            <!-- <li class="active"><a href="<?php echo base_url('public/pdf/OBC_cell.pdf') ?>"><span>OBC Cell</span></a></li> -->
                                                            <!-- <li class="active"><a href="<?php echo base_url('OBC_Cell') ?>"><span>OBC Cell</span></a></li> -->
                                                            <!-- <li class="active"><a href="<?php echo base_url('sc_st_cell1') ?>"><span>OBC CELL</span></a></li> -->
                                                            <li class="active"><a href="<?php echo base_url('obc_cell1') ?>"><span>OBC CELL</span></a></li>
                                                            <li class="active"><a href="<?php echo base_url('minority_cell') ?>"><span>MINORITY CELL</span></a></li>
                                                            <!-- <li class="active"><a href="<?php echo base_url('public/pdf/Minority_Cell.pdf') ?>"><span>Minority Cell</span></a></li> -->
                                                            <li class="active"><a href="<?php echo base_url('sc_st_cell') ?>"><span>SC & ST CELL</span></a></li>
                                                            <!-- <li class="active"><a href="<?php echo base_url('public/pdf/COMMITTEE_FOR_THE_DISPOSAL_OF_CASES_OF_REPORTED_MALPRACTICES.pdf') ?>"><span>Disposal Of Cases Of Reported Malpractice</span></a></li> -->
                                                            <li class="active"><a href="<?php echo base_url('anti_harassment_cell') ?>"><span>Internal compliance Committee</span></a>
                                                                <ul class="rd-navbar-dropdown">
                                                                <li><a href="<?php echo base_url('public/pdf/internal_complaints_committee_minutes.pdf') ?>"><span class="text-middle">Minutes </span></a></li>
                                                                </ul>
                                                            <li class="active"><a href="<?php echo base_url('https://docs.google.com/forms/d/e/1FAIpQLSeHBIzHn2BmQr4TG_mVaBVkoZnZyyfqJEtnuREvdrzuVxNcUw/viewform?usp=pp_url') ?>"><span>Online Grievances Redressal Mechanism</span></a>
                                                               
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                        <!-- <li class="active"><a href="<?php echo base_url('public/pdf/obc_cell.pdf') ?>"><span>OBC Cell</span></a></li>
                                                        <li class="active"><a href="<?php echo base_url('public/pdf/Minority_Cell.pdf') ?>"><span>Minority Cell</span></a></li>
                                                        <li class="active"><a href="<?php echo base_url('anti_harassment_cell') ?>"><span>Internal compliance Committee</span></a>
                                                            <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('public/pdf/internal_complaints_committee_minutes.pdf') ?>"><span class="text-middle">Minutes </span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="active"><a href="<?php echo base_url('sc_st_cell') ?>"><span>SC & ST CELL</span></a></li>
                                                        <li class="active"><a href="<?php echo base_url('public/pdf/COMMITTEE_FOR_THE_DISPOSAL_OF_CASES_OF_REPORTED_MALPRACTICES.pdf') ?>"><span>Disposal Of Cases Of Reported Malpractice</span></a></li> -->

                                                </ul>
                                            </li>
                                             

                                            <li class="active"><a href="#"><span>NAAC</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                     <li class="active "><a href="<?php echo base_url('#') ?>"><span>NAAC Peer Team Visit</span></a>
                                                     <ul class="rd-navbar-dropdown">
                                                        <li class="active "><a href="<?php echo base_url('public/pdf/Naac/NAAC_Peer_Team_Visit_Schedule.pdf') ?>"><span>Schedule</span></a>
                                                        <li class="active "><a href="<?php echo base_url('#') ?>"><span>Video</span></a> 
                                                    </ul>
                                                    <li class="active "><a href="<?php echo base_url('pdf/SSR_Report/SSR_REVISED_REPORT.pdf') ?>"><span>SSR</span></a> 
                                                   </li>

                                                   <li class="active"><a href="<?php echo base_url('#') ?>"><span>AQAR</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2013-2014.pdf"><span class="text-middle">2013-2014</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2014-2015.pdf"><span class="text-middle">2014-2015</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2015-2016.pdf"><span class="text-middle">2015-2016</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2016-2017.pdf"><span class="text-middle">2016-2017</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2017-2018.pdf"><span class="text-middle">2017-2018</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2018-2019.pdf"><span class="text-middle">2018-2019</span></a></li>
                                                                                                                        
                                                        </ul>
                                                    </li>

                                                      <li class="active"><a href="<?php echo base_url('certificate') ?>"><span>NAAC Certificate</span></a>
                                                        </li>

                                                    </li>
                                                </ul>
                                            </li>




                                           <!-- <li class="active "><a href="<?php echo base_url('pdf/SSR_Report/SSR_REVISED_REPORT.pdf') ?>"><span>SSR</span></a> 
                                           </li> -->

                                            <li class="active"><a href="#"><span>IQAC</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('about_iqac') ?>"><span>About IQAC</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('iqac_members') ?>"><span>IQAC Members </span></a>
                                                    </li>
                                                    <!-- <li class="active "><a href="https://naac.sripushpamcollege.co.in/" target="_blank"><span>AQAR </span></a> -->
                                                    <!-- <li class="active"><a href="<?php echo base_url('#') ?>"><span>AQAR</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2013-2014.pdf"><span class="text-middle">2013-2014</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2014-2015.pdf"><span class="text-middle">2014-2015</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2015-2016.pdf"><span class="text-middle">2015-2016</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2016-2017.pdf"><span class="text-middle">2016-2017</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2017-2018.pdf"><span class="text-middle">2017-2018</span></a></li>
                                                            <li><a href="public/pdf/Naac/AQAR/AQAR2018-2019.pdf"><span class="text-middle">2018-2019</span></a></li>
                                                                                                                        
                                                        </ul>
                                                    </li> -->

                                                    <li class="active "><a href="https://assessmentonline.naac.gov.in/public/index.php/hei" target="_blank"><span>NAAC-HEI Portal</span></a>
                                                        </li>   
                                                        <li class="active "><a href="https://naac.avvmspc.ac.in/" target="_blank"><span>NAAC-AVVMSPC Portal</span></a>
                                                        </li>   
                                                        <li class="active "><a href="https://aqar2021.avvmspc.ac.in/" target="_blank"><span>AQAR-2021</span></a>
                                                        </li>   
                                                       
                                                    <!-- <li class="active"><a href="<?php echo base_url('certificate') ?>"><span>NAAC Certificate</span></a>
                                                        </li> -->
                                                   
                                                                                    

                                                    <li class="active "><a href="<?php echo base_url('iqac_meet') ?>"><span>IQAC Meet </span></a>
                                                    </li>
                                                    <!-- <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Code_of_conduct_SSR-converted.pdf') ?>"><span>Code Of Conduct</span></a> -->
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Policies</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Code_of_conduct_SSR-converted.pdf') ?>"><span>Code Of Conduct</span></a>
                                                            <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Research_Policy.pdf') ?>"><span>Research Policy</span></a>
                                                            <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Strategic_plan_and_Deployment_Policy.pdf') ?>"><span>Strategic Plan and Deployment</span></a>
                                                        </ul>
                                                    </li>

                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Action Taken Report</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Action%20Taken%20Report%20of%20IQAC%202019.pdf') ?>"><span>2019-2020</span></a>
                                                            <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Action%20Taken%20Report%20of%20IQAC%202019.pdf') ?>"><span>2020-2021</span></a>
                                                            
                                                        </ul>
                                                    </li>


                                                    <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Action%20Taken%20Report%20of%20IQAC%202019.pdf') ?>"><span>Action Taken Report </span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/IQAC/Undertaking%20Form%20and%20RTI.pdf') ?>"><span>Principal's Undertaking</span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('curriculum_feedback') ?>"><span>Curriculum Feedback </span></a>
                                                    </li>     
                                                    <li class="active "><a href="<?php echo base_url('annual_reports') ?>"><span>Annual Report </span></a>
                                                    </li>   
                                                    

                                                    <!-- <li class="active"><a href="<?php echo base_url('#') ?>"><span>Annual Report</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            
                                                            <li><a href="public/pdf/AVVMSPC_Annual_Report_2019_2020.pdf"><span class="text-middle">2015-2016</span></a></li>
                                                            <li><a href="public/pdf/AVVMSPC_Annual_Report_2019_2020.pdf"><span class="text-middle">2016-2017</span></a></li>
                                                            <li><a href="public/pdf/AVVMSPC_Annual_Report_2019_2020.pdf"><span class="text-middle">2017-2018</span></a></li>
                                                            <li><a href="public/pdf/AVVMSPC_Annual_Report_2019_2020.pdf"><span class="text-middle">2018-2019</span></a></li>
                                                            <li><a href="public/pdf/AVVMSPC_Annual_Report_2019_2020.pdf"><span class="text-middle">2019-2020</span></a></li>
                                                                                                                        
                                                        </ul>
                                                    </li> -->

                                            </ul>
                                            </li>
                                           
                                           
                                            <li class="active"><a href="#"><span>NIRF</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('nirf') ?>"><span>About NIRF</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2022.pdf') ?>"><span>NIRF 2022</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2021.pdf') ?>"><span>NIRF 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            
                                           

                                            <li class="active "><a href="<?php echo base_url('coe') ?>"><span>COE </span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('coe') ?>"><span>About Examinations</span></a>

                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Examination Time Table</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="pdf/Exam/UG_Time_Table_Nov_2021.pdf"><span class="text-middle">November 2021 UG</span></a></li>
                                                            <li><a href="pdf/Exam/PG_Time_Table_Nov_2021.pdf"><span class="text-middle">November 2021 PG </span></a></li>                                                          
                                                                                                                        
                                                        </ul>
                                                    </li>

                                                    <li class="active "><a href="https://www.iobnet.co.in/iobpay/entry.do?dirlinkmerid=AVVTAN&dirlinkcatcd=EDU" target="_blank"><span>Exam Fees</span></a>
                                                    <!-- <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2021.pdf') ?>"><span>NIRF 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> -->
                                                    <li class="active "><a href="https://examresult.sripushpamcollege.co.in/" target="_blank"><span>Exam Result </span></a>
                                                    <li class="active"><a href="<?php echo base_url('public/pdf/COMMITTEE_FOR_THE_DISPOSAL_OF_CASES_OF_REPORTED_MALPRACTICES.pdf') ?>"><span>Disposal Of Cases Of Reported Malpractice</span></a></li>
                                                    </li>
                                                </ul>
                                            </li>

                                                                                        
                                            
                                            <li class="active"><a herf="#"><span>SPCTE</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="<?php echo base_url('spcte') ?>"><span>About SPCTE </span></a>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Administration</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Management </span></a></li>
                                                            <li><a href="<?php echo base_url('spcte_director_message') ?>"><span class="text-middle">Director’s Message </span></a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Programmes </span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('spcte_mba') ?>"><span class="text-middle">M.B.A </span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">M.C.A </span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">M.Phil</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Ph.D </span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Faculty</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('spcte_core_faculty') ?>"><span class="text-middle">Core Faculty </span></a></li>
                                                            <li><a href="<?php echo base_url('spcte_visiting_faculty') ?>"><span class="text-middle">Visiting Faculty</span></a></li>
                                                            <!-- <li><a href="<?php echo base_url('spcte_visiting_faculty') ?>"><span class="text-middle">Visiting Faculty- Corporate</span></a></li> -->
                                                        </ul>
                                                    </li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Mandatory Disclosure</span></a>
                                                    <ul class="rd-navbar-dropdown">
                                                    <!-- <li class="active "><a href="<?php echo base_url('nirf') ?>"><span>About NIRF</span></a> -->
                                                    <!-- <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2021.pdf') ?>"><span>NIRF 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> -->
                                                    <li class="active "><a href="<?php echo base_url('/public/pdf/EOA_SPCTE/Approval_Copy.pdf') ?>"><span>Approval Copy</span></a> 
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/EOA_SPCTE/EOA_Report_2021-22.PDF') ?>"><span>EOA 2021-2022</span></a> 
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/EOA_SPCTE/EOA_Report_2020-21.PDF') ?>"><span>EOA 2020-2021</span></a> 
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/EOA_SPCTE/EOA_Report_2019-20.PDF') ?>"><span>EOA 2019-2020</span></a> 
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/EOA_SPCTE/EOA_Report_2018-19.PDF') ?>"><span>EOA 2018-2019</span></a> 
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/EOA_SPCTE/EOA_Report_2017-18.PDF') ?>"><span>EOA 2017-2018</span></a> 
                                                    </li>
                                                </ul>
                                                </li>


                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>PMKVY-TI</span></a></li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Clubs & Associations</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Institution’s Innovation Cell (MHRD)</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Skill Development Cell</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Gender Equality Ce </span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Human Resource Club</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Financial Literacy Club </span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>News & Events</span></a></li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Alumnae </span></a></li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>Placement</span></a></li>
                                                    <li class="active"><a href="<?php echo base_url('#') ?>"><span>MoU</span></a>
                                                        <ul class="rd-navbar-dropdown">
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Institution’s Innovation Cell (MHRD).</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Skilling India, Banglore.</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Skill Slate Academy, Pune.</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Centre for Entrepreneurship Development, Madurai.</span></a></li>
                                                            <li><a href="<?php echo base_url('#') ?>"><span class="text-middle">Financial Literacy Club </span></a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                   

                                                </ul>
                                            </li>
                                            <!-- <li class="active"><a href="#"><span>Events 2021</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Independance Day Celebration 2021 (75 th)</span></a>
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Founder's Day 2021 (122 nd)</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Events/Founders_Commemoration_Day_17_09_2021.pdf') ?>"><span>Founder's Commemoration Day 2021 (51 st)</span></a>
                                                    <li class="active "><a href="<?php echo base_url('public/pdf/Events/Launching_of_IOB_Pay.pdf') ?>"><span>Launching of IOB Pay</span></a>
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Academic Councial Meeting 2021</span></a>
                                                    <li class="active "><a href="<?php echo base_url('#') ?>"><span>Gandhi Jeyanthi Celebration 2021(152nd)</span></a>

                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li class="active"><a href="#"><span>Staff Portal</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li class="active "><a href="https://avvmspc.controllerofexamination.com" target="_blank"><span>Attendance Entry</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="active"><a href="#"><span>Student Portal</span></a>
                                                <ul class="rd-navbar-dropdown">
                                                

                                                <li class="active "><a href="https://cubonline.biz/StudentLogin?Instname=AVVMSPCP" target="_blank"><span>Semester (Tuition) Fees Payment </span></a>    
                                                <li class="active "><a href="https://docs.google.com/forms/d/e/1FAIpQLSdwzO6DD_By8Ow3nm3qxT57f7IcngSCWCFOIn2TMboJQi0TXQ/viewform" target="_blank"><span>Semester Course Registration(SCR)</span></a>
                                                    <!-- <li class="active "><a href="https://avvmspc.controllerofexamination.com/student-login.php" target="_blank"><span>Feedback on Faculty</span></a> -->
                                                    <li class="active "><a href="https://avvmspc.controllerofexamination.com/student-login.php" target="_blank"><span>Feedback on Curriculum</span></a>
                                                    <li class="active "><a href="https://forms.gle/f4eQiLJcXSDun1GBA" target="_blank"><span>EDC Link 2022-2023(For II PG)</span></a>
                                                    <li class="active "><a href="https://forms.gle/d7tMWELmdQbqAfry6" target="_blank"><span>NME(Day) Link 2022-2023(For III UG)</span></a>
                                                    <li class="active "><a href="https://forms.gle/mERC97WuRVuCzHHn9" target="_blank"><span>NME(Evening) Link 2022-2023(For III UG)</span></a> 

                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="active"><a href="<?php echo base_url('contact') ?>"><span>Contact Us</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
</body>

</html>