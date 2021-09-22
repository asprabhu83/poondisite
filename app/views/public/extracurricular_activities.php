<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
<div class="section-height-800 breadcrumb-extracurricular-activities context-dark text-center">
	<div class="shell section-bottom-30">
		<div class="veil reveal-md-block">
			<h1 class="text-bold" style="color: cornsilk;">Extra Curricular Activities</h1>
		</div>
		<ul class="list-inline list-inline-with-arrows p">
			<ul class="list-inline list-inline-with-arrows p">
				<li><a href="<?php echo base_url()?>" class="text-white">Home </a></li>
				<li>Extra Curricular Activities</li>
			</ul>
		</ul>
	</div>
</div>
<section class="section-90 section-md-top-120 section-md-bottom-111">
	<div class="shell-fluid">
		<div class=" text-left ">
			<div class="cell-xs-12 cell-sm-12 cell-md-12 offset-top-60 offset-md-top-0"><center>
				<h2>Extra Curricular Activities</h2>
				</center>
				<div class="offset-top-20 inset-left-30">
                    <ul class="list list-marked text-matrix">
						<li><a href="<?php echo base_url('ncc')?>"   style="color: #31708f;">NCC</a></li>
						<li><a href="<?php echo base_url('nss')?>"  style="color: #31708f;">NSS</a></li>
                    	<li><a href="http://sripushpamcollege.co.in/pdf/EDC-Objective.pdf" target="_blank" style="color: #31708f;">Entrepreneurship Development Cell</a></li>
						<li><a href="<?php echo base_url('yrc')?>"style="color: #31708f;"> Youth Red Cross</a></li>
						<li><a href="<?php echo base_url('associations')?>" style="color: #31708f;">Associations</a></li>
						<li><a href="<?php echo base_url('ecoclub')?>"  style="color: #31708f;">Eco Club</a></li>
						<li><a href="<?php echo base_url('public/pdf/extra/uba.pdf')?>"  style="color: #31708f;">Unnat Bharat Abhiyan(UBA)</a></li>
						<!-- <li class="active "><a href="<?php echo base_url('public/pdf/NIRF/NIRF_2018.pdf') ?>"><span>NIRF 2018</span></a> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
init_public_tail();
?>