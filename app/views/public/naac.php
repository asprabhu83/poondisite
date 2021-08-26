<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>

<?php

 if(!isset($_SESSION['name'])){
	$_SESSION['name']='';
 }


$token=$_SESSION['name'];

 ?>



<?php if($token == 'admin') { ?> 
<section class="naac_table">
	<div class="section-height-800 breadcrumb-founders context-dark text-center">
		<div class="shell section-bottom-30">
			<div class="veil reveal-md-block">
				<h1 class="text-bold" style="color: cornsilk;">NAAC</h1>
			</div>
			<ul class="list-inline list-inline-with-arrows p">
				<ul class="list-inline list-inline-with-arrows p">
					<li><a href="<?php echo base_url() ?>" class="text-white">Home </a></li>
					<li>NAAC</li>
				</ul>
			</ul>
		</div>
	</div>
    <div class="container">
        <div class="naac_tab_box">
            <div class="naac_tab">
				<div class="naac_tab_heading"> Criterian</div>
                <div class="naac_tab_item active" data-target="1">1. Curricular Aspects <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="2">2.Teaching- Learning and Evaluation <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="3">3.Research, Innovations and Extension <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="4">4.Infrastructure and Learning Resources <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="5">5.Student Support and Progression <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="6">6.Governance, Leadership and Management <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="7">7.Institutional Values and Best Practices <i class="fas fa-chevron-right" style="display:none;"></i></div>
            </div>
            
            <div class="naac_tab_content">
                <div class="content_item content_item1 active">                    
                    
                    <div class="accordian">                        
                        <div class="acc_title active" data-target="1" >1.1 Curriculum Design and Development <span>50 <i class="fas fa-chevron-up"></i></span></div>
                        <div class="acc_content acc_content1" style="display:block;" >
                            <div>1.1.1 POs, PSOs and COS  
								<!-- <span>20</span> -->
                                <!-- <a href="/assets/Naac Doc/Link_Quality_Indicator_Framework.pdf" target="_blank">View Document</a> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            
                            <div>1.1.2 Syllabus Revision 
                                <!-- <span>20</span>
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>-->
                            
                            <a href="/assets/NAAC/Link_Quality_Indicator_Framework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            
                            <div>1.1.3 Employability/ Entrepreneurship/ Skill development 
                                <!-- <span>10</span>
                            <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>  -->
                            <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="accordian">
                        <div class="acc_title" data-target="2" >1.2 Academic Flexibility <span>40 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content2"  >
                            <div>1.2.1 New Courses introduced across all programes 
                                <!-- <span>20</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            <div>1.2.2 CBCS / Elective course system 
                                <!-- <span>20</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                        </div>
                        </div>
                    </div>    
                    
                    <div class="accordian">
                        <div class="acc_title" data-target="3" >1.3 Curriculum Enrichment <span>40 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content3" >
                            <div>1.3.1 Professional Ethics, Gender, & etc. 
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            <div>1.3.2 Value-added courses and life skills 
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            <div>1.3.3 Student enrolled under 1.3.2  
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            <div>1.3.4 Field projects/ internships/Student Project 
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >1.4  Feedback System <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content4"  >
                            <div>1.4.1 Feedback for design and review of syllabus 
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                            <div>1.4.2 Feedback system of the institution 
                                <!-- <span>10</span></div> -->
                                <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
               
                <div class="content_item content_item2">
                <div class="accordian">
                        <div class="acc_title" data-target="5" >2.1 Student Enrolment and Profile <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content5"  >
                            <div>2.1.1 Student Enrolment and Profile <span>10</span></div>
                            <div>2.1.2 Average percentage of seats filled against reserved categories (SC, ST, OBC, Divyangjan, etc. as per applicable reservation policy) during the last five years (exclusive of supernumerary seats) <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="6" >2.2 Catering to Student Diversity <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content6"  >
                            <div>2.2.1 The institution assesses the learning levels of the students and organises special Programmes for advanced learners and slow learners <span>15</span></div>
                            <div>2.2.2 Student - Full time teacher ratio (Data for the latest completed academic year) <span>15</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="7" >2.3 Teaching - Learning Process  <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content7"  >
                            <div>2.3.1 Student centric methods, such as experiential learning, participative learning and problem-solving methodologies are used for enhancing learning experiences <span>15</span></div>
                            <div>2.3.2 Teachers use ICT enabled tools including online resources for effective teaching and learning process <span>15</span></div>
                            <div>2.3.3 Ratio of students to mentor for academic and other related issues (Data for the latest completed academic year) <span>10</span></div>
                            <div>2.3.4 Preparation and adherence of Academic Calendar and Teaching plans by the institution <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="8" >2.4 Teacher Profile and Quality <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content8"  >
                            <div>2.4.1 Average percentage of full-time teachers against sanctioned posts during the last five years <span>15</span></div>
                            <div>2.4.2 Average percentage of full-time teachers with Ph.D. / D.M. / M.Ch. / D.N.B Super speciality / D.Sc. / D.Litt. during the last five years <span>20</span></div>
                            <div>2.4.3 Average teaching experience of full-time teachers in the same institution (Data for the latest completed academic year in number of years)  <span>15</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="9" >2.5 Evaluation Process and Reforms <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content9"  >
                            <div>2.5.1 Average number of days from the date of last semester-end/ yearend examination till the declaration of results during the last five years <span>20</span></div>
                            <div>2.5.2 Average percentage of student complaints/grievances about evaluation against total number appeared in the examinations during the last five years <span>15</span></div>
                            <div>2.5.3 IT integration and reforms in the examination procedures and processes including Continuous Internal Assessment (CIA) have brought in considerable improvement in Examination Management System (EMS) of the Institution <span>15</span> </div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="10" >2.6 Student Performance and Learning Outcomes <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content10"  >
                            <div>2.6.1 Programme outcomes and course outcomes for all Programmes offered by the institution are stated and displayed on website and communicated to teachers and students <span>20</span></div>
                            <div>2.6.2 Attainment of program outcomes and course outcomes are evaluated by the institution <span>10</span> </div>
                            <div>2.6.3 Pass percentage of students (Data for the latest completed academic year)  <span>20</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="11" >2.7 Student Satisfaction Survey <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content11"  >
                            <div>2.7.1 Online student satisfaction survey regarding to teaching learning process. <span>50</span></div>
                        </div>
                    </div>
                </div>
                <div class="content_item content_item3">
                    <div class="accordian">
                        <div class="acc_title" data-target="12" >3.1 Promotion of Research and Facilities <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content12"  >
                            <div>3.1.1 The institution Research facilities are frequently updated and there is well defined policy for promotion of research which is uploaded on the institutional website and implemented <span>6</span></div>
                            <div>3.1.2 The institution provides seed money to its teachers for research <span>8</span></div>
                            <div>3.1.3 Percentage of teachers awarded national / international fellowship for advanced studies/research during the last five years <span>6</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="13" >3.2 Resource Mobilization for Research <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content13"  >
                            <div>3.2.1 Grants received from Government and non-governmental agencies for research projects, endowments, Chairs in the institution during the last five years (INR in Lakhs)  <span>2</span></div>
                            <div>3.2.2 Percentage of teachers having research projects during the last five years <span>2</span></div>
                            <div>3.2.3 Percentage of teachers recognised as research guides  <span>3</span></div>
                            <div>3.2.4 Average percentage of departments having Research projects funded by government and non-government agencies during the last five years <span>3</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="14" >3.3 Innovation Ecosystem <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content14"  >
                            <div>3.3.1 Institution has created an eco-system for innovations, creation and transfer of knowledge supported by dedicated centers for research, entrepreneurship, community orientation, Incubation etc. <span>5</span></div>
                            <div>3.3.2 Number of workshops/seminars conducted on Research Methodology, Intellectual Property Rights (IPR), entrepreneurship and skills development during the last five years <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="15" >3.4 Research Publications and Awards <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content15"  >
                            <div>3.4.1 The Institution ensures implementation of its stated Code of Ethics for research through the following:  <span>5</span></div>
                            <div>3.4.2 Number of Ph.D’s registered per teacher (as per the data given w.r.t recognized Ph.D guides/ supervisors provided at 3.2.3 metric) during the last five years <span>5</span></div>
                            <div>3.4.3 Number of research papers per teacher in the Journals notified on UGC website during the last five years  <span>5</span></div>
                            <div>3.4.4 Number of books and chapters in edited volumes / books published per teacher during the last five years <span>5</span></div>
                            <div>3.4.5 Bibliometrics of the publications during the last five years based on average Citation index in Scopus/ Web of Science/ PubMed  <span>5</span></div>
                            <div>3.4.6 Bibliometrics of the publications during the last five years based on Scopus/ Web of Science – h-index of the Institution   <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="16" >3.5 Consultancy <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content16"  >
                            <div>3.5.1 Revenue generated from consultancy and corporate training during the last five years (INR in Lakhs) <span>5</span></div>
                            <div>3.5.2 Total amount spent on developing facilities, training teachers and staff for undertaking consultancy during the last five years <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="17" >3.6 Extension Activities <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content17"  >
                            <div>3.6.1 Extension activities are carried out in the neighbourhood community, sensitising students to social issues, for their holistic development, and impact thereof during the last five years  <span>10</span></div>
                            <div>3.6.2 Number of awards and recognition received by the Institution, its teachers and students for extension activities from Government / Government recognised bodies during last five years  <span>15</span></div>
                            <div>3.6.3 Number of extension and outreach programs conducted by the institution through NSS/NCC/Red cross/YRC etc., during the last five years (including Government initiated programs such as Swachh Bharat, Aids Awareness, Gender Issue, etc. and those organised in collaboration with industry, community and NGOs) <span>10</span></div>
                            <div>3.6.4 Average percentage of students participating in extension activities listed at (3.6.3) above during the last five years <span>15</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="18" >3.7 Collaboration <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content18"  >
                            <div>3.7.1 Number of Collaborative activities per year for research/ faculty exchange/ student exchange/ internship/ on –the-job training/ project work  <span>10</span></div>
                            <div>3.7.2 Number of functional MoUs with institutions of national, international importance, other universities, industries, corporatehouses etc. during the last five years (only functional MoUs withongoing activities to be considered) <span>10</span></div>
                        </div>
                    </div>
                </div>
                <div class="content_item content_item4">
                    <div class="accordian">
                        <div class="acc_title" data-target="19" >4.1 Physical Facilities <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content19"  >
                            <div>4.1.1 The Institution has adequate infrastructure and physical facilities for teaching – learning, viz., classrooms, laboratories, computing equipment, etc. <span>6</span></div>
                            <div>4.1.2 The institution has adequate facilities for cultural activities, yoga, games (indoor, outdoor) and sports. (Gymnasium, yoga centre, auditorium, etc.) <span>4</span></div>
                            <div>4.1.3 Percentage of classrooms and seminar halls with ICT – enabled facilities such as smart class, LMS, etc. (Data for the latest completed academic year) <span>10</span></div>
                            <div>4.1.4 Average percentage of expenditure for infrastructure augmentation excluding salary during the last five years (INR in Lakhs) <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="20" >4.2 Library as a Learning Resource  <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content20"  >
                            <div>4.2.1 Library is automated using Integrated Library Management System (ILMS)  <span>5</span></div>
                            <div>4.2.2 Institution has access to the following: 1. e-journals 2. e-ShodhSindhu 3. Shodhganga Membership 4. e-books 5. Databases 6. Remote access to e-resources  <span>5</span></div>
                            <div>4.2.3 Average annual expenditure for purchase of books/ e-books and subscription to journals/e-journals during the last five years (INR in Lakhs)  <span>5</span></div>
                            <div>4.2.4 Percentage per day usage of library by teachers and students (foot falls and login data for online access) <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="21" >4.3 IT Infrastructure <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content21"  >
                            <div>4.3.1 Institution has an IT policy covering wi-fi, cyber security, etc., and allocated budget for updating its IT facilities <span>8</span></div>
                            <div>4.3.2 Student - Computer ratio (Data for the latest completed academic year) <span>8</span></div>
                            <div>4.3.3 Bandwidth of internet connection in the Institution <span>10</span></div>
                            <div>4.3.4 Institution has Facilities for e-content development Facilities available for e-content development: 1. Media Centre 2. Audio visual Centre, 3. Lecture Capturing System (LCS) 4. Mixing equipment and software for editing <span>4</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="22" >4.4 Maintenance of Campus Infrastructure <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content22"  >
                            <div>4.4.1 Average percentage expenditure incurred on maintenance of physical facilities and academic support facilities excluding salary component, during the last five years <span>10</span></div>
                            <div>4.4.2 There are established systems and procedures for maintaining and utilizing physical, academic and support facilities – laboratory, library, sports complex, computers, classrooms etc. <span>10</span></div>
                        </div>
                    </div>
                </div>
                <div class="content_item content_item5">
                   <div class="accordian">
                        <div class="acc_title" data-target="23" >5.1 Student Support <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content23"  >
                            <div>5.1.1 Average percentage of students benefited by scholarships and freeships provided by the Government during the last five years <span>6</span></div>
                            <div>5.1.2 Average percentage of students benefited by scholarships, freeships, etc. provided by the institution and non-government agencies during the last five years <span>5</span></div>
                            <div>5.1.3 Following Capacity development and skills enhancement activities are organised for improving student’s capability 1. Soft skills 2. Language and communication skills 3. Life skills (Yoga, physical fitness, health and hygiene) 4. Awareness of trends in technology <span>8</span></div>
                            <div>5.1.4 Average percentage of students benefited by guidance for competitive examinations and career counselling offered by the institution during the last five years <span>6</span></div>
                            <div>5.1.5 The institution adopts the following for redressal of student grievances including sexual harassment and ragging cases <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="24" >5.2 Student Progression <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content24"  >
                            <div>5.2.1 Average percentage of placement of outgoing students during the last five years <span>10</span></div>
                            <div>5.2.2 Percentage of student progression to higher education (previous graduating batch) <span>10</span></div>
                            <div>5.2.3 Average percentage of students qualifying in state/ national/ international level examinations during the last five years <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="25" >5.3  Student Participation and Activities <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content25"  >
                            <div>5.3.1 Number of awards/medals for outstanding performance in sports/cultural activities at inter-university / state /national / international events (award for a team event should be counted as one) during the last five years <span>10</span></div>
                            <div>5.3.2 Presence of an active Student Council & representation of students on academic & administrative bodies/committees of the institution <span>10</span></div>
                            <div>5.3.3 Average number of sports and cultural events / competitions organised by the institution per year <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="26" >5.4  Alumni Engagement <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content26"  >
                            <div>5.4.1 The Alumni Association/Chapters (registered and functional) contributes significantly to the development of the institution through financial and other support services  <span>5</span></div>
                            <div>5.4.2 Alumni financial contribution during the last five years (in INR) <span>5</span></div>
                        </div>
                    </div>
                </div>
                <div class="content_item content_item6">
                <div class="accordian">
                        <div class="acc_title" data-target="27" >6.1 Institutional Vision and Leadership <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content27"  >
                            <div>6.1.1 The governance of the institution is reflective of an effective leadership in tune with the vision and mission of the Institution <span>5</span></div>
                            <div>6.1.2 The effective leadership is reflected in various institutional practices such as decentralization and participative management  <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="28" >6.2 Strategy Development and Deployment <span>10 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content28"  >
                            <div>6.2.1 The institutional Strategic/ Perspective plan is effectively deployed <span>2</span></div>
                            <div>6.2.2 The functioning of the institutional bodies is effective and efficient as visible from policies, administrative setup appointment and service rules, procedures, etc. <span>4</span></div>
                            <div>6.2.3 Implementation of e-governance in areas of operation: 1. Administration 2. Finance and Accounts 3. Student Admission and Support 4. Examination <span>4</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="29" >6.3 Faculty Empowerment Strategies <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content29"  >
                            <div>6.3.1 The institution has effective welfare measures for teaching and non-teaching staff and avenues for career development/ progression <span>4</span></div>
                            <div>6.3.2 Average percentage of teachers provided with financial support to attend conferences / workshops and towards membership fee of professional bodies during the last five years <span>8</span></div>
                            <div>6.3.3 Average number of professional development / administrative training programs organized by the Institution for teaching and non-teaching staff during the last five years <span>8</span></div>
                            <div>6.3.4 Average percentage of teachers undergoing online/ face-to-face Faculty Development Programmes during the last five years (Professional Development Programmes, Orientation / Induction Programmes, Refresher Course, Short Term Course etc.,) <span>10</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="30" >6.4 Financial Management and Resource Mobilization <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content30"  >
                            <div>6.4.1 Institution conducts internal and external financial audits regularly <span>4</span></div>
                            <div>6.4.2 Funds / Grants received from non-government bodies, individuals, philanthropists during the last five years (not covered in Criterion III and V) (INR in Lakhs) <span>10</span></div>
                            <div>6.4.3 Institutional strategies for mobilisation of funds and the optimal utilisation of resources <span>6</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="31" >6.5  Internal Quality Assurance System <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content31"  >
                            <div>6.5.1 Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the quality assurance strategies and processes visible in terms of – Incremental improvements made for the preceding five years with regard to quality (in case of first cycle) Incremental improvements made for the preceding five years with regard to quality and post accreditation quality initiatives (second and subsequent cycles) 
								<span>10</span>
							</div>
                            <div>6.5.2 The institution reviews its teaching learning process, structures & methodologies of operations and learning outcomes at periodic intervals through IQAC set up as per norms <span>10</span></div>
                            <div>6.5.3 Quality assurance initiatives of the institution include:  <span>10</span></div>
                        </div>
                    </div>
                </div>
                <div class="content_item content_item7">
                   <div class="accordian">
                        <div class="acc_title" data-target="32" >7.1 Institutional Values and Social Responsibilities <span>50 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content32"  >
                            <div>7.1.1 Measures initiated by the Institution for the promotion of gender equity during the last five years. <span>5</span></div>
                            <div>7.1.2 The Institution has facilities for alternate sources of energy and energy conservation measures  <span>5</span></div>
                            <div>7.1.3 Describe the facilities in the Institution for the management of the following types of degradable and non-degradable waste (within 500 words) <span>4</span></div>
                            <div>7.1.4 Water conservation facilities available in the Institution:<span>4</span></div>
                            <div>7.1.5 Green campus initiatives include (4) <span>4</span></div>
                            <div>7.1.6 Quality audits on environment and energy are regularly undertaken by the institution (5) <span>5</span></div>
                            <div>7.1.7 The Institution has disabled-friendly, barrier free environment <span>4</span></div>
                            <div>7.1.8 Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance and harmony towards cultural, regional, linguistic, communal socioeconomic and other diversities (within 500 words). <span>5</span></div>
                            <div>7.1.9 Sensitization of students and employees of the Institution to the constitutional obligations: values, rights, duties and responsibilities of citizens <span>4</span></div>
                            <div>7.1.10 The Institution has a prescribed code of conduct for students, teachers, administrators and other staff and conducts periodic programmes in this regard. <span>5</span></div>
                            <div>7.1.11 Institution celebrates / organizes national and international commemorative days, events and festivals <span>5</span></div>
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="33" >7.2 Best Practices <span>30 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content33"  >7.2.1 Describe two best practices successfully implemented by the Institution as per NAAC format provided in the Manual. <span>30</span></div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="34" >7.3  Institutional Distinctiveness <span>20 <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content34"  >7.3.1 Portray the performance of the Institution in one area distinctive to its priority and thrust within 1000 words <span>20</span></div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
<?php }else{ ?>
	<section class="login_page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 mx-auto">
					<div class="card">
						<div class="card-body">
							<form action="">
								<div class="err_box">
									<span class="error_msg empty_error">Value should not be empty</span>
									<span class="error_msg email_error">Invalid Email</span>
									<span class="error_msg invalid_error">Invalid Credentials</span>
								</div>
								<div class="input_box">
									<input type="text" class="email" placeholder="Email" />
								</div>
								<div class="input_box">
									<input type="password" class="password" placeholder="Password" />
								</div>
								<div>
									<button class="login_btn" type="button">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="/assets/slider/jquery.js"></script>	
<script>
    $(document).ready(function(){
        $('.login_btn').on('click',function(){
            var email = $('.email').val();
            var password = $('.password').val();
            var err =0;
            var email_regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            $('.err_box .empty_error').removeClass('show');
            $('.err_box .email_error').removeClass('show');
            $('.err_box .invalid_error').removeClass('show');
            if(email == '' || password == ''){
                err++
                $('.err_box .empty_error').addClass('show');
            }else{
                $('.err_box .empty_error').removeClass('show');
                if(!email_regex.test(email)){
                    err++;
                    $('.err_box .email_error').addClass('show');
                }else{
                    $('.err_box .email_error').removeClass('show');
                }
            }

            if(err === 0){
                if(email == 'admin@gmail.com' && password == 'Welcome@123#'){
                    <?php $_SESSION['name']='admin'; ?>
                    location.reload();
                }else{
                    $('.err_box .invalid_error').addClass('show');
                }
            }
        })
        $('input').on('keyup',function(event){
            if (event.keyCode === 13) {
                event.preventDefault();
                $('.login_btn').trigger('click');
            }
        })
    })
</script>

<?php } ?>	

<?php
init_public_tail();
?>

<?php
  function login_func(){
	  echo 'hello';
  }
 ?>
