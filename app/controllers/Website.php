<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends App_Controller
{
    public $cachetime;
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->cachetime = 5;
        $this->data['keywords'] = "sri pushpam college, rural, thanjavur, vandayar, pushpam, avvmspc, NAAC, College, tamilnadu, india, Institution, poondi, poondi college, thulasiah vandayar, kalvi kavalar, poondi alumni, rural college, tamilnadu, india, autonomous";
        $this->data['description'] = "AVVM Sri pushpam college is located near thanjavur which give education to the rural people for the past 47 years.";
    }

    public function index()
    {
        $this->data['title'] = "WELCOME TO A.V.V.M Sri Pushpam College,Poondi,Thanjavurl...";
        $this->data['datas'] = $this->Crud_model->display_records();
        $this->load->view('public/index', $this->data);
    }

    public function sripushpam_history()
    {
        $this->data['title'] = "Sripushpam History";
        $this->data['menu_sripushpam_history'] = "active";
        $this->load->view('public/sripushpam_history', $this->data);
    }
    public function alumni()
    {
        $this->data['title'] = "Alumni";
        $this->data['menu_galumni'] = "active";
        $this->load->view('public/alumni', $this->data);
    }

    public function gallery()
    {

        $this->data['title'] = "Gallery";
        $this->data['menu_gallery'] = "active";
        $this->data['galleries'] = galleries();
        $this->load->view('public/gallery', $this->data);
    }
    public function library()
    {

        $this->data['title'] = "Library";
        $this->data['menu_library'] = "active";
        $this->load->view('public/library', $this->data);
    }
    public function principal_message()
    {

        $this->data['title'] = "Principal's Message";
        $this->data['menu_raw_materials'] = "active";
        $this->load->view('public/principal_message', $this->data);
    }
    public function vision_mission()
    {
        $this->data['title'] = "Vision & Mission";
        $this->data['menu_vision_mission'] = "active";
        $this->load->view('public/vision_mission', $this->data);
    }
    public function founders()
    {

        $this->data['title'] = "Founders";
        $this->data['menu_founders'] = "active";
        $this->load->view('public/founders', $this->data);
    }
    public function committees()
    {

        $this->data['title'] = "Committees";
        $this->data['menu_committees'] = "active";
        $this->load->view('public/committees', $this->data);
    }
    public function scholarships()
    {

        $this->data['title'] = "Scholarships";
        $this->data['menu_scholarships'] = "active";
        $this->load->view('public/scholarships', $this->data);
    }
    public function anti_harassment_cell()
    {

        $this->data['title'] = "Anti-Harassment Cell";
        $this->data['menu_anti_harassment_cell'] = "active";
        $this->load->view('public/anti_harassment_cell', $this->data);
    }
    public function associations()
    {

        $this->data['title'] = "Associations";
        $this->data['menu_associations'] = "active";
        $this->load->view('public/associations', $this->data);
    }

    public function annual_reports()
    {

        $this->data['title'] = "Annual Reports";
        $this->data['menu_annual_reports'] = "active";
        $this->load->view('public/annual_reports', $this->data);
    }
    public function research_achieved()
    {

        $this->data['title'] = "Research Achieved";
        $this->data['menu_research_achieved'] = "active";
        $this->load->view('public/research_achieved', $this->data);
    }

    public function best_practices_page()
    {

        $this->data['title'] = "Best Practices";
        $this->data['menu_best_practices_page'] = "active";
        $this->load->view('public/best_practices_page', $this->data);
    }
    public function non_statutory_committees()
    {

        $this->data['title'] = "Non-Statutory Committees";
        $this->data['menu_non_statutory_committees'] = "active";
        $this->load->view('public/non_statutory_committees', $this->data);
    }
    public function extracurricular_activities()
    {

        $this->data['title'] = "Extracurricular activities";
        $this->data['menu_extracurricular_activities'] = "active";
        $this->load->view('public/extracurricular_activities', $this->data);
    }

    public function curriculum_feedback()
    {

        $this->data['title'] = "Curriculum Feedback";
        $this->data['menu_curriculum_feedback'] = "active";
        $this->load->view('public/curriculum_feedback', $this->data);
    }

    public function institutional_distinctiveness()
    {

        $this->data['title'] = "Institutional Distinctiveness";
        $this->data['menu_institutional_distinctiveness'] = "active";
        $this->load->view('public/institutional_distinctiveness', $this->data);
    }

    public function best_practices1()
    {

        $this->data['title'] = "Best Practices - I";
        $this->data['menu_best_practices1'] = "active";
        $this->load->view('public/best_practices1', $this->data);
    }

    public function best_practices1_new()
    {

        $this->data['title'] = "Best Practices - I";
        $this->data['menu_best_practices1_new'] = "active";
        $this->load->view('public/best_practices1_new', $this->data);
    }

    public function best_practices2()
    {

        $this->data['title'] = "Best Practices - II";
        $this->data['menu_best_practices2'] = "active";
        $this->load->view('public/best_practices2', $this->data);
    }

    public function certificate()
    {

        $this->data['title'] = "Certificate";
        $this->data['menu_certificate'] = "active";
        $this->load->view('public/certificate', $this->data);
    }
    public function naac()
    {

        $this->data['title'] = "NAAC";
        $this->data['menu_naac'] = "active";
        $this->load->view('public/naac', $this->data);
    }

    public function staffportal()
    {

        $this->data['title'] = "Staff Portal";
        $this->data['menu_staffportal'] = "active";
        $this->load->view('public/staffportal', $this->data);
    }
    public function course_outcome()
    {

        $this->data['title'] = "Course Outcome";
        $this->data['menu_course_outcome'] = "active";
        $this->load->view('public/course_outcome', $this->data);
    }
    public function syllabus_revision()
    {

        $this->data['title'] = "Syllabus Revision";
        $this->data['menu_syllabus_revision'] = "active";
        $this->load->view('public/syllabus_revision', $this->data);
    }
  
    public function research_page()
    {

        $this->data['title'] = "Research Page";
        $this->data['menu_research_page'] = "active";
        $this->load->view('public/research_page', $this->data);
    }
    public function research_honored()
    {

        $this->data['title'] = "Research Honored";
        $this->data['menu_research_honored'] = "active";
        $this->load->view('public/research_honored', $this->data);
    }
    
    public function syllabus_2017()
    {

        $this->data['title'] = "Syllabus 2017";
        $this->data['menu_syllabus_2017'] = "active";
        $this->load->view('public/syllabus_2017', $this->data);
    }
    public function syllabus_2014_2017()
    {

        $this->data['title'] = "Syllabus 2014-2017";
        $this->data['menu_syllabus_2014_2017'] = "active";
        $this->load->view('public/syllabus_2014_2017', $this->data);
    }

    public function syllabus_2014_2020()
    {

        $this->data['title'] = "Syllabus 2014-2020";
        $this->data['menu_syllabus_2014_2020'] = "active";
        $this->load->view('public/syllabus_2014_2020', $this->data);
    }

    public function syllabus_2014_2023()
    {

        $this->data['title'] = "Syllabus 2014-2023";
        $this->data['menu_syllabus_2014_2023'] = "active";
        $this->load->view('public/syllabus_2014_2023', $this->data);
    }
    public function committee_of_management()
    {

        $this->data['title'] = "Committee of Management";
        $this->data['menu_committee_of_management'] = "active";
        $this->load->view('public/committee_of_management', $this->data);
    }
    public function board_of_directors()
    {

        $this->data['title'] = "Board of Directors";
        $this->data['menu_board_of_directors'] = "active";
        $this->load->view('public/board_of_directors', $this->data);
    }

    public function committee_of_directors()
    {
        $this->data['title'] = "Committee of Directors";
        $this->data['menu_committee_of_directors'] = "active";
        $this->load->view('public/committee_of_directors', $this->data);
    }

    public function former_principals()
    {

        $this->data['title'] = "Former Principals";
        $this->data['menu_former_principals'] = "active";
        $this->load->view('public/former_principals', $this->data);
    }

    public function milestones()
    {

        $this->data['title'] = "Milestones";
        $this->data['menu_milestones'] = "active";
        $this->load->view('public/milestones', $this->data);
    }

    public function statutory_committees()
    {

        $this->data['title'] = "Statutory Committees";
        $this->data['menu_statutory_committees'] = "active";
        $this->load->view('public/statutory_committees', $this->data);
    }

    public function infrastructure_facilities()
    {

        $this->data['title'] = "Infrastructure Facilities";
        $this->data['menu_infrastructure_facilities'] = "active";
        $this->load->view('public/infrastructure_facilities', $this->data);
    }

    public function programmes()
    {

        $this->data['title'] = "Programmes";
        $this->data['menu_programmes'] = "active";
        $this->load->view('public/programmes', $this->data);
    }

    public function popsoco()
    {

        $this->data['title'] = "PO, PSO & CO";
        $this->data['menu_popsoco'] = "active";
        $this->load->view('public/popsoco', $this->data);
    }

    public function research()
    {

        $this->data['title'] = "Research";
        $this->data['menu_reseaarch'] = "active";
        $this->load->view('public/research', $this->data);
    }

    // public function course_outcomes()
    // {

    //     $this->data['title'] = "Course Outcomes";
    //     $this->data['menu_course_outcomes'] = "active";
    //     $this->load->view('https://naac.sripushpamcollege.co.in/curricular_aspects/1.1/1.1.1/course-outcomes', $this->data);
    // }


    public function departments()
    {

        $this->data['title'] = "Departments";
        $this->data['menu_departments'] = "active";
        $this->load->view('public/departments', $this->data);
    }
    public function placement()
    {

        $this->data['title'] = "PLACEMENT";
        $this->data['menu_placement'] = "active";
        $this->load->view('public/placement', $this->data);
    }


    public function coe()
    {

        $this->data['title'] = "COE";
        $this->data['menu_coe'] = "active";
        $this->load->view('public/coe', $this->data);
    }

    public function spcte()
    {

        $this->data['title'] = "SPCTE";
        $this->data['menu_spcte'] = "active";
        $this->load->view('public/spcte', $this->data);
    }
    public function spcte_mba()
    {

        $this->data['title'] = "M.B.A";
        $this->data['menu_spcte_mba'] = "active";
        $this->load->view('public/spcte_mba', $this->data);
    }
    public function spcte_mangement()
    {

        $this->data['title'] = "MANAGEMENT";
        $this->data['menu_spcte_mangement'] = "active";
        $this->load->view('public/spcte_mangement', $this->data);
    }
    public function spcte_director_message()
    {

        $this->data['title'] = "DIRECTOR_MESSAGE";
        $this->data['menu_spcte_director_message'] = "active";
        $this->load->view('public/spcte_director_message', $this->data);
    }
    public function spcte_core_faculty()
    {

        $this->data['title'] = "CORE FACULTY";
        $this->data['menu_spcte_core_faculty'] = "active";
        $this->load->view('public/spcte_core_faculty', $this->data);
    }
    public function spcte_visiting_faculty()
    {

        $this->data['title'] = "VISTING FACULTY";
        $this->data['menu_spcte_visiting_faculty'] = "active";
        $this->load->view('public/spcte_visiting_faculty', $this->data);
    }


    public function statistics()
    {

        $this->data['title'] = "Statistics";
        $this->data['menu_statistics'] = "active";
        $this->load->view('public/statistics', $this->data);
    }

    public function attendance()
    {

        $this->data['title'] = "Attendance";
        $this->data['menu_attendance'] = "active";
        $this->load->view('public/attendance', $this->data);
    }

    public function attendance_history()
    {

        $this->data['title'] = "Attendance History";
        $this->data['menu_attendance_history'] = "active";
        $this->load->view('public/attendance_history', $this->data);
    }

    
    public function res_history()
    {

        $this->data['title'] = "History";
        $this->data['menu_res_history'] = "active";
        $this->load->view('public/res_history', $this->data);
    }

    public function res_economics()
    {

        $this->data['title'] = "Economics";
        $this->data['menu_res_economics'] = "active";
        $this->load->view('public/res_economics', $this->data);
    }
    
    public function res_tamil()
    {

        $this->data['title'] = "Tamil";
        $this->data['menu_res_tamil'] = "active";
        $this->load->view('public/res_tamil', $this->data);
    }

    public function res_english()
    {

        $this->data['title'] = "English";
        $this->data['menu_res_english'] = "active";
        $this->load->view('public/res_english', $this->data);
    }

    public function res_commerce()
    {

        $this->data['title'] = "Commerce";
        $this->data['menu_res_commerce'] = "active";
        $this->load->view('public/res_commerce', $this->data);
    }

    public function res_mathematics()
    {

        $this->data['title'] = "Mathematics";
        $this->data['menu_res_mathematics'] = "active";
        $this->load->view('public/res_mathematics', $this->data);
    }

    public function res_physics()
    {

        $this->data['title'] = "Physics";
        $this->data['menu_res_physics'] = "active";
        $this->load->view('public/res_physics', $this->data);
    }
    public function res_chemistry()
    {

        $this->data['title'] = "Chemistry";
        $this->data['menu_res_chemistry'] = "active";
        $this->load->view('public/res_chemistry', $this->data);
    }

    public function res_botany()
    {

        $this->data['title'] = "Botany";
        $this->data['menu_res_botany'] = "active";
        $this->load->view('public/res_botany', $this->data);
    }

    public function res_microbiology()
    {

        $this->data['title'] = "Microbiology";
        $this->data['menu_res_microbiology'] = "active";
        $this->load->view('public/res_microbiology', $this->data);
    }
    public function res_zoology()
    {

        $this->data['title'] = "Zoology";
        $this->data['menu_res_zoology'] = "active";
        $this->load->view('public/res_zoology', $this->data);
    }
    public function res_computer_science()
    {

        $this->data['title'] = "Computer Science";
        $this->data['menu_res_computer_science'] = "active";
        $this->load->view('public/res_computer_science', $this->data);
    }
    public function res_hindi()
    {

        $this->data['title'] = "Hindi";
        $this->data['menu_res_hindi'] = "active";
        $this->load->view('public/res_hindi', $this->data);
    }
    public function tamil()
    {

        $this->data['title'] = "Tamil";
        $this->data['menu_tamil'] = "active";
        $this->load->view('public/tamil', $this->data);
    }

    public function history()
    {

        $this->data['title'] = "History";
        $this->data['menu_history'] = "active";
        $this->load->view('public/history', $this->data);
    }

    public function geography()
    {

        $this->data['title'] = "Geography";
        $this->data['menu_geography'] = "active";
        $this->load->view('public/geography', $this->data);
    }

    public function economics()
    {

        $this->data['title'] = "Economics";
        $this->data['menu_economics'] = "active";
        $this->load->view('public/economics', $this->data);
    }

    public function english()
    {

        $this->data['title'] = "English";
        $this->data['menu_english'] = "active";
        $this->load->view('public/english', $this->data);
    }

    public function commerce()
    {

        $this->data['title'] = "Commerce";
        $this->data['menu_commerce'] = "active";
        $this->load->view('public/commerce', $this->data);
    }

    public function mathematics()
    {

        $this->data['title'] = "Mathematics";
        $this->data['menu_mathematics'] = "active";
        $this->load->view('public/mathematics', $this->data);
    }

    public function physics()
    {

        $this->data['title'] = "Physics";
        $this->data['menu_physics'] = "active";
        $this->load->view('public/physics', $this->data);
    }

    public function chemistry()
    {

        $this->data['title'] = "Chemistry";
        $this->data['menu_chemistry'] = "active";
        $this->load->view('public/chemistry', $this->data);
    }

    public function botany()
    {

        $this->data['title'] = "Botany";
        $this->data['menu_botany'] = "active";
        $this->load->view('public/botany', $this->data);
    }
    public function microbiology()
    {

        $this->data['title'] = "Microbiology";
        $this->data['menu_botany'] = "active";
        $this->load->view('public/microbiology', $this->data);
    }

    public function zoology()
    {

        $this->data['title'] = "Zoology";
        $this->data['menu_zoology'] = "active";
        $this->load->view('public/zoology', $this->data);
    }
    public function biotechnology()
    {

        $this->data['title'] = "Biotechnology";
        $this->data['menu_biotechnology'] = "active";
        $this->load->view('public/biotechnology', $this->data);
    }
    public function business_administration()
    {

        $this->data['title'] = "Business Administration";
        $this->data['menu_Business_Administration'] = "active";
        $this->load->view('public/business_administration', $this->data);
    }
    public function management_studies()
    {

        $this->data['title'] = "Management Studies";
        $this->data['menu_management_studies'] = "active";
        $this->load->view('public/management_studies', $this->data);
    }
    public function computer_science()
    {

        $this->data['title'] = "Computer Science";
        $this->data['menu_computer_science'] = "active";
        $this->load->view('public/computer_science', $this->data);
    }
    public function computer_applications()
    {

        $this->data['title'] = "Computer Applications";
        $this->data['menu_computer_applications'] = "active";
        $this->load->view('public/computer_applications', $this->data);
    }
    public function physical_education()
    {

        $this->data['title'] = "Physical Education";
        $this->data['menu_physical_education'] = "active";
        $this->load->view('public/physical_education', $this->data);
    }
    public function library_and_information_science()
    {

        $this->data['title'] = "Library and Information Science";
        $this->data['menu_library_and_information_science'] = "active";
        $this->load->view('public/library_and_information_science', $this->data);
    }
    public function hindi()
    {

        $this->data['title'] = "Hindi";
        $this->data['menu_hindi'] = "active";
        $this->load->view('public/hindi', $this->data);
    }

    public function quarterly_financial_results()
    {

        $this->data['title'] = "Quarterly Financial Results";
        $this->data['menu_quarterly_financial_results'] = "active";
        $this->load->view('public/quarterly_financial_results', $this->data);
    }
    public function voting()
    {

        $this->data['title'] = "Voting";
        $this->data['menu_voting'] = "active";
        $this->load->view('public/voting', $this->data);
    }
    public function investor_contact()
    {

        $this->data['title'] = "Investor Contact";
        $this->data['menu_investor_contact'] = "active";
        $this->load->view('public/investor_contact', $this->data);
    }
    public function agm_notice()
    {

        $this->data['title'] = "Agm Notice";
        $this->data['menu_agm_notice'] = "active";
        $this->load->view('public/agm_notice', $this->data);
    }
    public function bse_updates()
    {

        $this->data['title'] = "Bse Updates";
        $this->data['menu_bse_updates'] = "active";
        $this->load->view('public/bse_updates', $this->data);
    }
    public function share_holding_pattern()
    {

        $this->data['title'] = "Share Holding Pattern";
        $this->data['menu_share_holding_pattern'] = "active";
        $this->load->view('public/share_holding_pattern', $this->data);
    }
    public function remuneration_policy()
    {

        $this->data['title'] = "Remuneration Policy";
        $this->data['menu_remuneration_policy'] = "active";
        $this->load->view('public/remuneration_policy', $this->data);
    }
    public function risk_management_policy()
    {

        $this->data['title'] = "Risk Management Policy";
        $this->data['menu_risk_management_policy'] = "active";
        $this->load->view('public/risk_management_policy', $this->data);
    }
    public function quality_policy()
    {

        $this->data['title'] = "Quality Policy";
        $this->data['menu_quality_policy'] = "active";
        $this->load->view('public/quality_policy', $this->data);
    }
    public function quality_management_system()
    {

        $this->data['title'] = "Quality Management System";
        $this->data['menu_quality_management_system'] = "active";
        $this->load->view('public/quality_management_system', $this->data);
    }
    public function safety_policy()
    {

        $this->data['title'] = "Safety Policy";
        $this->data['menu_safety_policy'] = "active";
        $this->load->view('public/safety_policy', $this->data);
    }
    public function quality_control()
    {

        $this->data['title'] = "Quality Control";
        $this->data['menu_quality_control'] = "active";
        $this->load->view('public/quality_control', $this->data);
    }
    public function familiarisation_program()
    {

        $this->data['title'] = "Familiarisation Program";
        $this->data['menu_familiarisation_program'] = "active";
        $this->load->view('public/familiarisation_program', $this->data);
    }
    public function fair_disclosure()
    {

        $this->data['title'] = "Fair Disclosure";
        $this->data['menu_fair_disclosure'] = "active";
        $this->load->view('public/fair_disclosure', $this->data);
    }
    public function party_transactions()
    {

        $this->data['title'] = "Party Transactions";
        $this->data['menu_party_transactions'] = "active";
        $this->load->view('public/party_transactions', $this->data);
    }
    public function compliance_report()
    {

        $this->data['title'] = "Compliance Report";
        $this->data['menu_compliance_report'] = "active";
        $this->load->view('public/compliance_report', $this->data);
    }
    public function contact()
    {

        $this->data['title'] = "Contact";
        $this->data['menu_contact'] = "active";
        $this->load->view('public/contact', $this->data);
    }
    public function disclaimer()
    {

        $this->data['title'] = "Disclaimer";
        $this->data['menu_disclaimer'] = "active";
        $this->load->view('public/disclaimer', $this->data);
    }
    public function Privacy_Policy()
    {

        $this->data['title'] = "Privacy Policy";
        $this->data['menu_Privacy_Policy'] = "active";
        $this->load->view('public/Privacy_Policy', $this->data);
    }
    public function page_not_found()
    {
        $this->data['title'] = "404";
        $this->data['menu_page_not_found'] = "active";
        $this->load->view('public/page_not_found', $this->data);
    }
    public function ncc()
    {
        $this->data['title'] = "NCC";
        $this->data['menu_ncc'] = "active";
        $this->load->view('public/ncc', $this->data);
    }
    public function iqac()
    {
        $this->data['title'] = "IQAC";
        $this->data['menu_iqac'] = "active";
        $this->load->view('public/iqac', $this->data);
    }

    public function iqacnew()
    {
        $this->data['title'] = "IQAC NEW";
        $this->data['menu_iqacnew'] = "active";
        $this->load->view('public/iqacnew', $this->data);
    }
    public function iqac_meet()
    {
        $this->data['title'] = "IQAC Meet";
        $this->data['menu_iqac_meet'] = "active";
        $this->load->view('public/iqac_meet', $this->data);
    }
    public function about_iqac()
    {
        $this->data['title'] = "About IQAC";
        $this->data['menu_about_iqac'] = "active";
        $this->load->view('public/about_iqac', $this->data);
    }
    public function about_iqac1()
    {
        $this->data['title'] = "About IQAC";
        $this->data['menu_about_iqac1'] = "active";
        $this->load->view('public/about_iqac1', $this->data);
    }

    // public function action_report()
    // {
    //     $this->data['title'] = "Action Taken Report";
    //     $this->data['menu_action_taken_report'] = "active";
    //     $this->load->view('public/action_taken_report', $this->data);
    // }
    public function nirf()
    {
        $this->data['title'] = "NIRF";
        $this->data['menu_nirf'] = "active";
        $this->load->view('public/nirf',$this->data);
    }
    public function pedc()
    {
        $this->data['title'] = "PEDC";
        $this->data['menu_pedc'] = "active";
        $this->load->view('public/pedc',$this->data);
    }
    public function swayam()
    {
        $this->data['title'] = "SWAYAM";
        $this->data['menu_swayam'] = "active";
        $this->load->view('public/swayam',$this->data);
    }

    public function edu_ontology()
    {
        $this->data['title'] = "edu_ontology";
        $this->data['menu_edu_ontology'] = "active";
        $this->load->view('public/edu_ontology',$this->data);
    }
    public function e_contents()
    {
        $this->data['title'] = "e_contents";
        $this->data['menu_e_contents'] = "active";
        $this->load->view('public/e_contents',$this->data);
    }

    public function herbal_garden()
    {
        $this->data['title'] = "herbal_garden";
        $this->data['menu_herbal_garden'] = "active";
        $this->load->view('public/herbal_garden',$this->data);
    }
    public function sc_st_cell()
    {
        $this->data['title'] = "SC & ST CELL";
        $this->data['menu_sc_st_cell'] = "active";
        $this->load->view('public/sc_st_cell',$this->data);
    }
    public function obc_cell1()
    {
        $this->data['title'] = "OBC CELL";
        $this->data['menu_obc_cell'] = "active";
        $this->load->view('public/obc_cell1',$this->data);
    }
    
    public function minority_cell()
    {
        $this->data['title'] = "MINORITY CELL";
        $this->data['menu_minority_cell'] = "active";
        $this->load->view('public/minority_cell',$this->data);
    }
    

    public function iqac_members()
    {
        $this->data['title'] = "IQAC Members";
        $this->data['menu_iqac_members'] = "active";
        $this->load->view('public/iqac_members', $this->data);
    }
    public function edc()
    {
        $this->data['title'] = "EDC";
        $this->data['menu_edc'] = "active";
        $this->load->view('public/edc', $this->data);
    }
    public function nss()
    {
        $this->data['title'] = "NSS";
        $this->data['menu_nss'] = "active";
        $this->load->view('public/nss', $this->data);
    }
    public function yrc()
    {
        $this->data['title'] = "YRC";
        $this->data['menu_yrc'] = "active";
        $this->load->view('public/yrc', $this->data);
    }
    public function ecoclub()
    {
        $this->data['title'] = "ECO CLUB";
        $this->data['menu_ecoclub'] = "active";
        $this->load->view('public/ecoclub', $this->data);
    }
    public function login_form()
    {
        $this->data['title'] = "LOGIN_FORM";
        $this->data['menu_login_form'] = "active";
        $this->load->view('public/login_form', $this->data);
    }
    public function know_your_umis()
    {
        $this->data['title'] = "KNOW_YOUR_UMIS";
        $this->data['menu_know_your_umis'] = "active";
        $this->load->view('public/know_your_umis', $this->data);
    }
    public function feedback()
    {
        $this->data['title'] = "Feedback";
        $this->data['menu_feedback'] = "active";
        $this->load->view('public/feedback', $this->data);
    }
    public function feedback_form()
    {
        $this->data['title'] = "Feedback_form";
        $this->data['menu_feedback_form'] = "active";
        $this->load->view('public/feedback_form', $this->data);
    }
    public function faculty_login_form()
    {
        $this->data['title'] = "FACULTY_LOGIN_FORM";
        $this->data['menu_faculty_login_form'] = "active";
        $this->load->view('public/faculty_login_form', $this->data);
    }
    public function faculty_feedback()
    {
        $this->data['title'] = "faculty_Feedback";
        $this->data['menu_faculty_feedback'] = "active";
        $this->load->view('public/faculty_feedback', $this->data);
    }
    public function faculty_feedback_form()
    {
        $this->data['title'] = "faculty_Feedback_form";
        $this->data['menu_faculty_feedback_form'] = "active";
        $this->load->view('public/faculty_feedback_form', $this->data);
    }

    // public function edc()
    // {
    //     redirect(base_url('public/pdf/edc/EDC-Objective.pdf'));
    // }
    }
