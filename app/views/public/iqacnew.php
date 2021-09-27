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
				<h1 class="text-bold" style="color: cornsilk;">Accrediation & Ranking</h1>
			</div>
			<ul class="list-inline list-inline-with-arrows p">
				<ul class="list-inline list-inline-with-arrows p">
					<li><a href="<?php echo base_url() ?>" class="text-white">Home </a></li>
					<li>Accrediation & Ranking</li>
				</ul>
			</ul>
		</div>
	</div>
    <div class="container">
        <div class="naac_tab_box">
            <div class="naac_tab">
				<div class="naac_tab_heading"> Accrediation & Ranking</div>
                <div class="naac_tab_item active" data-target="1">1. IQAC <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="2">2. NIRF <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="3">3. NAAC <i class="fas fa-chevron-right" style="display:none;"></i></div>
                
                <!-- <div class="naac_tab_heading"> Internal Quality Assurance Cell</div>
                <div class="naac_tab_item active" data-target="1">1. About IQAC <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="2">2.IQAC Member <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="3">3.IQAC Meet <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="4">4.AQAR <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="5">5.Policies <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="6">6.Action Taken <i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="7">7.Principal Undertaking<i class="fas fa-chevron-right" style="display:none;"></i></div>
                <div class="naac_tab_item" data-target="7">8.Feedback for Curriculum<i class="fas fa-chevron-right" style="display:none;"></i></div> -->
            </div>
            
            <div class="naac_tab_content">
            <div class="naac_tab_content_heading"> Internal Quality Assurance Cell</div>
            <!----- Section 1-->
                <div class="content_item content_item1 active">                    
                    <div class="accordian">                        
                        <div class="acc_title active" data-target="1" >About IQAC <span> <i class="fas fa-chevron-up"></i></span></div>
                        
                        <!-- <div class="acc_content acc_content1" style="display:block;" >
                            <div>1.1.1 POs, PSOs and COS  
								<!-- <span>20</span> -->
                                <!-- <a href="/assets/Naac Doc/Link_Quality_Indicator_Framework.pdf" target="_blank">View Document</a> -->
                                <!-- <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a> -->
                            <!-- </div> -->
                            
                            <!-- <div>1.1.2 Syllabus Revision  -->
                                <!-- <span>20</span>
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>-->
                            
                            <!-- <a href="/assets/NAAC/Link_Quality_Indicator_Framework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a> -->
                            <!-- </div> -->
                            
                            <!-- <div>1.1.3 Employability/ Entrepreneurship/ Skill development  -->
                                <!-- <span>10</span>
                            <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>  -->
                            <!-- <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div>                    -->
                   

                    
                    <div class="accordian">
                        <div class="acc_title" data-target="2" >IQAC Member <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content2"  >
                        </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="3" >IQAC Meet <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content3" >
                            
                        </div>
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >AQAR <span> <i class="fas fa-chevron-down"></i></span></div>
                        <class="acc_content acc_content4"> 
                            
                            <div class="acc_content acc_content1" style="display:block;" >
                            <div>2015-2016  
								<a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="20px" /></a> 
                            </div>
                            </div>     
                            <div class="acc_content acc_content1" style="display:block;" >                       
                            <div>2016-2017
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>
                            </div>
                            </div>
                            <div class="acc_content acc_content1" style="display:block;" >
                            <div>2017-2018
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>
                            </div>
                            </div>
                            <div class="acc_content acc_content1" style="display:block;" >
                            <div>2018-2019
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>
                            </div>
                            </div>
                            <div class="acc_content acc_content1" style="display:block;" >
                            <div>2019-2020
                                <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>
                            </div>
                            </div>
                        </div>
                            <!-- <a href="/assets/NAAC/Link_Quality_Indicator_Framework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a> -->
                            <!-- </div> -->
                            
                            <!-- <div>1.1.3 Employability/ Entrepreneurship/ Skill development  -->
                                <!-- <span>10</span>
                            <a href="/assets/docs/convocation_invite_2014.pdf" target="_blank">View Document</a>  -->
                            <!-- <a href="/assets/NAAC/1.1.1_Front_Page.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" alt="" width="40px" /></a> -->
                    
                        
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >Policies <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content4"  >
                            
                        
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >Action taken <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content4"  >
                            
                        
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >Principal Undertaking <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content4"  >
                            
                        
                    </div>
                    <div class="accordian">
                        <div class="acc_title" data-target="4" >Feedback for Curriculum <span> <i class="fas fa-chevron-down"></i></span></div>
                        <div class="acc_content acc_content4"  >
                            
                       
                    </div>

                </div>
               <!-- End Section -->
            
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
