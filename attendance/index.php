<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance 2021 - 2022</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Academic Planner 2021 - 2022" />
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->
<script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

 <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>
 <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"  style="font-size:300%;">Attendance Entry Form</h2>
                   
                    <form method="POST" action="data.php">
                        <div class="row row-space">
                            <!-- <div class="col-2"> -->
                                <div class="input-group">
                                    <label class="label">staffid</label>
                                    <input class="input--style-4" type="text" name="staffid">
                                </div>
                            <!-- </div> -->
                            

                        <!-- <div class="row row-space"> 
                            <div class="col-2">
                            <div class="input-group select2 select2-container select2-container--default">
                            <label class="label pe-4">Designation </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="designation">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="assistant_professor">Assistant Professor</option>
                                    <option value="associate_professor">Associate Professor</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                        </div> 
                            
                            
                            <div class="col-2">
                               <div class="input-group">
                            <label class="label pe-4">Department  </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department">
                                    <option disabled="disabled" selected="selected">Choose option</option>
									<option value="history">History</option>
									<option value="economics">Economics</option>
									<option value="tamil">Tamil</option>
									<option value="indian_culture">Indian Culture</option>
									<option value="english">English</option>
									<option value="commerce">Commerce</option>
									<option value="maths">Maths</option>
									<option value="physics">Physics</option>
									<option value="chemistry">Chemistry</option>
									<option value="botany">Botany</option>
									<option value="zoology">Zoology</option>
									<option value="biotechnology">Biotechnology</option>
									<option value="microbiology">Microbiology</option>
									<option value="computer_science">Computer Science</option>
									<option value="physical_education">Physical Education</option>
									<option value="computer_application">Computer Applications</option>
									<option value="geography">Geography</option>
									<option value="statistics">Statistics</option>
									<option value="business_administration">Business Administration</option>
									<option value="bank_management">Bank Management</option>
									<option value="b_litt">B.Litt</option>
									<option value="library_science">Library Science</option>
									<option value="information_technology">Information Technology</option>
									
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                        </div>
                       

                            
                            <div class="col-2"> -->
                            <div class="input-group">
                            <label class="label pe-4">Academic Year </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="academic_year">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="2021">2020  - 2021</option>
                                    <option value="2122">2021 - 2022</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                            


                            <!-- <div class="row row-space">
						    <div class="col-3"> -->
                            <div class="input-group">
                            <label class="label pe-4">Semester  </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="semester">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="odd">Odd </option>
                                    <option value="even">Even</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<!-- </div> -->
						
                        <div class="col-2">
                                <div class="input-group">
                                   <label class="label">Date </label>
                                    <input class="input--style-4" type="text" name="date1">
                                </div>
                            </div>


                        <div class="input-group">
                            <label class="label pe-4">Hour </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="hour">
                                    <option disabled="disabled" selected="selected">Choose option</option>
										<option value="1">I</option>
										<option value="2">II</option>
										<option value="3">III</option>
										<option value="4">IV </option>
										<option value="5">V </option>
								</select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                            <div class="col-2">
                                <div class="input-group">
                                   <label class="label">Subject Code </label>
                                    <input class="input--style-4" type="text" name="sub_code">
                                </div>
                            </div>





                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <div class="p-t-10">
								    <label class="label pe-4">Shift  </label>
                                            <label class="radio-container m-r-45">Day
                                                <input type="radio" checked="checked" name="shift" value="day">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Evening
                                                <input type="radio" name="shift" value="evening">
                                                <span class="checkmark"></span>
                                            </label>
                                    </div>
                                </div>
                            </div>                        

                        </div>


                        <!-- <div class="col-2"> -->
                        <div class="input-group">
                            <label class="label pe-4">Year  </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year" id="year">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="1">I</option>
                                    <option value="2">II</option>
									 <option value="3">III</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<!-- </div> -->

                          
                        
						
						  <!-- <div class="row row-space">
						   <div class="col-3"> -->
                        <div class="input-group">
                            <label class="label pe-4">Programme   </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="programme" id="programme">
                                    <option disabled="disabled" selected="selected">Choose option</option>
										<option value="ba">B.A</option>
										<option value="bcom">B.COM</option>
										<option value="bsc">BSC </option>
										<option value="bca">BCA </option>
										<option value="bba">BBA </option>
										<option value="blitt">B.Litt </option>
										<option value="ma">M.A </option>
										<option value="mcom">M.COM </option>
										<option value="msc">MSC </option>
										<option value="mca">MCA </option>
										<option value="mba">MBA </option>
										<option value="mlis">MLIS </option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<!-- </div> -->
						
						
					    <!-- <div class="col-2"> -->
                        <div class="input-group">
                            <label class="label pe-4">Class   </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                               <select name="class" id="class">
                                    <option disabled="disabled" selected="selected">Choose option</option>
									 <option disabled="disabled" selected="selected">Choose option</option>
									<option value="history">History</option>
									<option value="economics">Economics</option>
									<option value="tamil">Tamil</option>
									<option value="indian_culture">Indian Culture</option>
									<option value="english">English</option>
									<option value="commerce">Commerce</option>
									<option value="maths">Maths</option>
									<option value="physics">Physics</option>
									<option value="chemistry">Chemistry</option>
									<option value="botany">Botany</option>
									<option value="zoology">Zoology</option>
									<option value="biotechnology">Biotechnology</option>
									<option value="microbiology">Microbiology</option>
									<option value="computer_science">Computer Science</option>
									<option value="physical_education">Physical Education</option>
									<option value="computer_application">Computer Applications</option>
									<option value="geography">Geography</option>
									<option value="statistics">Statistics</option>
									<option value="business_administration">Business Administration</option>
									<option value="bank_management">Bank Management</option>
									<option value="b_litt">B.Litt</option>
									<option value="library_science">Library Science</option>
									<option value="information_technology">Information Technology</option>
									
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<!-- </div> -->
						
                    </div>

                    <div class="col-2">
                       <div class="input-group">
                            <label class="label pe-4">Section  </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="section" id="section">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
									 <option value="C">C</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						</div>
						  
                        <div class="col-2">
                       <div class="input-group" id="rollno_data">
                            <label class="label pe-4">Roll No.  </label>
                            <input type="checkbox" id="rollnochb" name="rollno" value="rollno">
                            <label for="rollnolbl"> 20CHM101</label><br>
                            </div>
                        </div>
						</div>
						  						
						 
						
						  </div>
						 
						  
					
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
			
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; <?php echo date('Y'); ?> Attendace Entry From 2020-2021.. All rights reserved | Design by <a href="https://www.sripushpamcollege.co.in/" target="_blank">AVVM SPC</a></p>
		</div>
		<!--//footer-->
	
	 <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>

<script>

$(function() {
    var base_url = window.location.origin;

    $("#section").change(function() {
        var year = $("#year").val();
        var programme = $("#programme").val();
        var class1 = $("#class").val();
        var section = $("#section").val();

        $.ajax({
            type: "POST",
            data: {"year":year,"program":programme,"class":class1,"section":section},
            dataType  : 'json',
            url: base_url+"/attendance/rollno.php",
            success: function(data){
               //data will contain the vote count echoed by the controller i.e.  
                
              //then append the result where ever you want like
              $("#rollno_data").html(data); //data will be containing the vote count which you have echoed from the controller

                }
            });
    });
});


</script>