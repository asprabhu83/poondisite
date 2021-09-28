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
                        <td><?php syllabus_link('syllabus_2017_updated/UG_SYLLABUS/ba_history_syllabus') ?></td>
						<td><?php syllabus_link('syllabus_2017_updated/PG_SYLLABUS/ma_history_syllabus') ?></td>
                    </tr>
                    <tr>
                        <td>Economics</td>
                        <td><?php syllabus_link('Economics/baeconomics') ?></td>
						<td><?php syllabus_link('Economics/maeconomics') ?></td>
                    </tr>
                    <tr>
                        <td>Tamil</td>
                        <td><?php syllabus_link('Tamil/batamil') ?></td>
						<td><?php syllabus_link('Tamil/matamil') ?></td>
                    </tr>
                    <tr>
                        <td>Indian Culture</td>
                        <td><?php syllabus_link('Tamil/baindianculture') ?></td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>B.Lit. Tamil</td>
                        <td><?php syllabus_link('Tamil/blit') ?></td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td><?php syllabus_link('English/baenglish') ?></td>
						<td><?php syllabus_link('English/maenglish') ?></td>
                    </tr>
                    <tr>
                        <td>Commerce</td>
                        <td><?php syllabus_link('commerce/bcom') ?></td>
						<td><?php syllabus_link('commerce/mcom') ?></td>
                    </tr>
                    <tr>
                        <td>B. Com. C.A.</td>
                        <td><?php syllabus_link('commerce/bcomca') ?></td>
						<td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>B. Com. B. M.</td>
                        <td><?php syllabus_link('commerce/bcombm') ?></td>
						<td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td><?php syllabus_link('Mathematics/bscmaths') ?></td>
						<td><?php syllabus_link('Mathematics/mscmaths') ?></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td><?php syllabus_link('Physics/bscphysics') ?></td>
						<td><?php syllabus_link('Physics/mscphysics') ?></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td><?php syllabus_link('chemistry/bsc') ?></td>
						<td><?php syllabus_link('chemistry/msc') ?></td>
                    </tr>
                    <tr>
                        <td>Botany</td>
                        <td><?php syllabus_link('botany/bsc') ?></td>
						<td><?php syllabus_link('botany/msc') ?></td>
                    </tr>
                    <tr>
                        <td>Microbiology</td>
                        <td class="pdf_items">-</td>
                        <td><?php syllabus_link('Microbiology/msc') ?></td>
                    </tr>
                    <tr>
                        <td>Zoology</td>
                        <td><?php syllabus_link('Zoology/bsczoology') ?></td>
						<td><?php syllabus_link('Zoology/msczoology') ?></td>
                    </tr>
                    <tr>
                        <td>Biotechnology</td>
                        <td class="pdf_items">-</td>
                        <td><?php syllabus_link('Zoology/mscbiotech') ?></td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td><?php syllabus_link('Computer Science/bsccs') ?></td>
						<td><?php syllabus_link('Computer Science/msccs') ?></td>
                    </tr>
                    <tr>
                        <td>Computer Applications</td>
                        <td><?php syllabus_link('Computer Science/BCA') ?></td>
						<td><?php syllabus_link('Computer Science/MCA') ?></td>
                    </tr>
                    <tr>
                        <td>Information Technology</td>
                        <td class="pdf_items">-</td>
                        <td><?php syllabus_link('Computer Science/mscit') ?></td>
                    </tr>
                    <tr>
                        <td>Physical Education, Health Education and Sports</td>
                        <td><?php syllabus_link('Physical Education/bscphysicaleducation') ?></td>
						<td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Business Administration	</td>
                        <td><?php syllabus_link('businessadministration/BBA') ?></td>
						<td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Statistics</td>
                        <td><?php syllabus_link('Statistics/bscstatistics') ?></td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td><?php syllabus_link('Geography/bscgeography') ?></td>
                        <td class="pdf_items">-</td>
                    </tr>
                    <tr>
                        <td>M.L.I.S</td>
                        <td class="pdf_items">-</td>
						<td><?php syllabus_link('Library and Information Science/MLIS') ?></td>
                    </tr>
                    <!-- <tr>
                        <td>Management Studies</td>
                        <td class="pdf_items">-</td>
						<td><?php syllabus_link('businessadministration/BBA') ?></td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
init_public_tail();
?>