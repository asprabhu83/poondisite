<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
pt.php
<div class="section-height-800 breadcrumb-physical-education context-dark text-center">
	<div class="shell section-bottom-30">
		<div class="veil reveal-md-block">
			<h1 class="text-bold">DEPARTMENT OF PHYSICAL EDUCATION </h1>
		</div>
		<ul class="list-inline list-inline-with-arrows p">
			<ul class="list-inline list-inline-with-arrows p">
				<li><a href="<?php echo base_url() ?>" class="text-white">Home </a></li>
				<li>Physical Education</li>
			</ul>
		</ul>
	</div>
</div>
<section class="section-90 section-md-top-120 section-md-bottom-111">
	<div id="fb-root">
		<div class="shell-fluid">
			<div class="range range-75 text-left">
				<div class="cell-xs-4 cell-lg-4">
					<?php department_quicklinks(); ?>

				</div>
				<div class="cell-xs-8 cell-lg-8">
					<h2 class="text-bold text-center">Physical Education</h2>
					<div class="offset-top-20"></div>
					<div class="offset-top-20"><br />
			<!--			<h4 align="" class="text-bold" id="q-1" data-type="anchor">PROGRAMMES</h4>
						<br />
						<table border="1px" cellpadding="3" cellspacing="5" height="100" style="width: 100%;" width="70">
							<tbody></tbody>
							<tbody>
								<tr>
									<th>Programmes</th>
									<th>Year of Affiliation</th>
								</tr>
								<tr>
									<td>B.Sc Physical Education</td>
									<td>1988 - 89</td>
								</tr>
								<tr>
									<td>Ph. D. Physical Education</td>
									<td>2003</td>
								</tr>
							</tbody>
						</table>
						<section class="">
							<div class="">
								<div class="">
								
                            <div class="cell-sm-10 cell-md-11 cell-lg-9 cell-xl-6 offset-top-30">
							<h4 class="text-bold center">PROGRAMME OUTCOMES</h4><br>
							<div data-group="tabs-group-default" class="resp-tabs-container tabs-group-default">
														<div>
															<h5 class="inset-left-10"><strong> The Program outcomes of Physical Education are:</strong></h5><br>
															<ul class="inset-left-30 list list-marked">
																<li>To prepare highly competent and skilled leaders in the field of physical education and sports.</li><br>
																<li>To provide excellent facilities for the up-liftment of physical education and sports in the state and country and to serve as a model institute. </li><br>
																<li>To create respectful student who value their health and fitness also practice healthful activates throughout their life. </li><br>
																<li>To promote inter-disciplinary research in the field of Physical Education, yoga and traditional sports.</li>
															</ul>

														</div>
						
                            </div>
                        </div>
						</div>
						<div class="handing-divider">
                            <div class="cell-sm-10 cell-md-11 cell-lg-9 cell-xl-6 offset-top-30">
                                <div>
                                    <h4 class="text-bold center">SYLLABUS</h4>
                                    <div class="offset-top-20">
                                        <ul class="inset-left-30 list list-marked">
											<li> <?php syllabus_link('B.Sc Physical Education ', 'Physical Education/bscphysicaleducation') ?></li>
										
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						<h4 align="" class="text-bold offset-top-30" id="q-2">RESEARCH ACTIVITIES</h4>
						<br />
						<h6 align="">Under Process</h6>
-->
						<h4 align="" class="text-bold offset-top-30" id="q-3">FACULTY MEMBERS</h4>
						<br />
						<table border="1px" cellpadding="3" cellspacing="5" height="100" style="width: 100%;" width="70">
							<tbody></tbody>
							<tbody>
								<tr>
									<th>Name of the Faculty Member</th>
									<th>Designation</th>
								</tr>
								<tr>
									<td><a href="<?php echo base_url('public/pdf/Departments/Physicaleducation/M.S.M.pdf') ?>" target="_blank" rel="noopener">Dr.M.S. Muthuramalingam</a></td>
									<td>Coordinator &amp; Associate Professor</td>
								</tr>
								<tr>
									<td><a href="<?php echo base_url('public/pdf/Departments/Physicaleducation/M.M.M.pdf') ?>" target="_blank" rel="noopener">Dr.M. Madan Mohan</a></td>
									<td>Associate Professor</td>
								</tr>
								<tr>
									<td><a href="#" target="_blank" rel="noopener">Prof.S.Dharakeswari</a></td>
									<td>Assistant Professor</td>
								</tr>
								<tr>
									<td><a href="#" target="_blank" rel="noopener">Dr.C.Malathy</a></td>
									<td>Director</td>
								</tr>
								<tr>
									<td colspan="3">Self - Finance Staff</td>
								</tr>
								<tr>
									<td><a href="#" target="_blank" rel="noopener">Dr.P.Anandakumar</a></td>
									<td>Assistant Professor</td>
								</tr>
								<tr>
									<td><a href="#" target="_blank" rel="noopener">Prof.K.Sathiyaselvam</a></td>
									<td>Assistant Professor</td>
								</tr>
								<tr>
									<td><a href="#" target="_blank" rel="noopener">Dr.E.Ravichandiran</a></td>
									<td>Assistant Professor</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h4 align="" class="text-bold offset-top-30" id="q-2">BLOG</h4>
					<br />
					<h6 align=""><a href="http://avvmspcphe.blogspot.com" target="_blank" class="text-matrix" rel="noopener">click here</a></h6>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php
init_public_tail();
?>