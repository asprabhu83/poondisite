<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>

<main class="syllabus_2017">
    <div class="container">
        <div class="heading">Syllabus 2017</div>
        <div class="table_contents" style="overflow-x:auto;">
            <table>
                <thead>
                   <tr>
                        <th></th>
                        <th>UG</th>
                        <th>PG</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>History</td>
                        <td><?php syllabus_link('B.A History ', 'History/bahistory') ?></td>
						<td><?php syllabus_link('M.A History', 'History/mahistory') ?></td>
                        <!-- <td class="pdf_items"><a href="/assets/syllabus/B.A_History_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_History_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_History_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>

                        <div class="handing-divider">
                            <div class="cell-sm-10 cell-md-11 cell-lg-9 cell-xl-6 offset-top-30">
                                <div>
                                    <h4 class="text-bold center">SYLLABUS</h4>
                                    <div class="offset-top-20">
                                        <ul class="inset-left-30 list list-marked">
											<li> <?php syllabus_link('B.A History ', 'History/bahistory') ?></li>
											<li> <?php syllabus_link('M.A History', 'History/mahistory') ?></li>
										
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
-->

                    </tr>
                    <tr>
                        <td>Economics</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.A_Economics_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Economics_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Econmics_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Tamil</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.A_Tamil_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.A_Tamil_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Tamil_syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Tamil_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Indian Culture</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.A_Indianculture_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>B.Lit. Tamil</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Lit_Tamil_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.A_English_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.A_English_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_English_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_English_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Commerce</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Com_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Com_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Commerce_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Commerce_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>B. Com. C.A.</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Com_Computerapplication_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>B. Com. B. M.</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Com_Bankmanagement_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Mathematics_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Mathematics_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Maths_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Mathematics_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Physics_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Physics_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Physics_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Physics_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Chemistry_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Chemistry_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Chemistry_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Chemistry_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Botany</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Botany_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Botany_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Botany_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Botany_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Microbiology</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Microbiology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Microbiology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Zoology</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Zoology_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Zoology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Zoology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Zoology_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Biotechnology</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Biotechnology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Computerscience_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Computerscience_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Computerscience_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Computerscience_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Computer Applications</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.C.A_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.C.A_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Information Technology</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Sc_Informationtechnology_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Physical Education, Health Education and Sports</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Physicaleducation_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Phyicaleducation_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Business Administration	</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.B.A_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.B.A_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Statistics</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Statistics_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td class="pdf_items"><a href="/assets/syllabus/B.Sc_Geography_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>M.L.I.S</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.L.I.S_Syllabus_revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Library and Information Science_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                    <tr>
                        <td>Management Studies</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items">-</td>
                        <td class="pdf_items"><a href="/assets/syllabus/M.Phil_Managementstudies_Syllabus_Revision.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                        <td class="pdf_items"><a href="/assets/syllabus/Ph.D_Management_Coursework.pdf" target="_blank"><img src="assets/images/pdf_icon2.png" style="width:30px;"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
init_public_tail();
?>