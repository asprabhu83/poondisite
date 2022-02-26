<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
<div class="section-height-800 breadcrumb-departments context-dark text-center">
	<div class="shell section-bottom-30">
		<div class="veil reveal-md-block">
			<h1 class="text-bold" style="color: cornsilk;">RESEARCH PROJECTS</h1>
		</div>
		<ul class="list-inline list-inline-with-arrows p">
			<ul class="list-inline list-inline-with-arrows p">
				<li><a href="<?php echo base_url()?>" class="text-white">Home </a></li>
				<!-- <li>Research Projects</li> -->
			</ul>
		</ul>
	</div>
</div>
<section class="section-90 section-md-top-20 section-md-bottom-111 ">
	<div id="fb-root"></div>
	<div class="shell-fluid">
		<div class=" text-left">
		<div class="cell-xs-4 cell-lg-4">
					<?php research_quicklinks();?>
				</div>

		</div>
	</div>
</section>
<?php
init_public_tail();
?>