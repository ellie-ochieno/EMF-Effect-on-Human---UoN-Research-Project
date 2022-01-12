<?php
    session_start();
        // tracks user session
    include 'includes/header.php';
        // extends header file
?>
	<header>
    <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="includes/admin/tables_handler/numeric-input-example.js"></script>

		<link rel="stylesheet" type="text/css" href="includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <title>Field Data | Highrise Estate Area</title> -->
		<style type="text/css">
      li a.fld_msrmnt_active{
          color: red !important;
          background-color: #064c67;
      }
      .navbar .dropdown-menu a.fld_data1{
          border: 1px solid grey;
          color: red !important;
          background-color: #064c67;
          /* border-radius: 6px; */
      }
      label#drop {
          color: #405580;
          padding: 1% 2%;
          font-size: 98.4%;
          width: : 200px;
          height: : 60px;
      }
       label#drop:hover{
         /* border-bottom: 1px solid #405580; */
       }
      #drop-down {
          position: relative;
          display: inline-block;
      }
      #dropdown-menu {
          display: none;
          position: absolute;
          font-family: sans-serif;
          font-size: 96.25%;
          background-color: #dededf;
          width: auto;
          margin-left:-50px;
          padding: 1% 2%;
          border-radius: 5px;
          z-index: 1;
          opacity: .8;
      }
      #dropdown-menu a {
          color: black;
          /* line-height: 2%;. */
          font-size: 92.25%;
          padding: 12px 10px;
          text-decoration: none;
          display: block;
      }
      #dropdown-menu a:hover {
        background-color: #ddd;
        text-decoration: underline;
      }
      #drop-down:hover #dropdown-menu {
        display: block
      }
      #field_data2_sctn,
      #field_data3_sctn,
      #field_data4_sctn,
      #field_data5_sctn,
      #field_data6_sctn,
      #field_data7_sctn,
      #field_data8_sctn,
      #field_data9_sctn,
      #field_data10_sctn,
      #field_data11_sctn,
      #field_data12_sctn,
      #field_data13_sctn,
      #field_data14_sctn,
      #field_data15_sctn,
      #field_data16_sctn,
      #field_data17_sctn,
      #field_data18_sctn,
      #field_data19_sctn,
      #field_data20_sctn,
      #field_data21_sctn,
      #field_data22_sctn{
          display: none;
      }

		</style>
	</header>
			<div class="section-ttl"></div>
          <div class="section-ttl">
            <h4 class="h-title-fld-info">Target Field Locations</h4>
          </div>
          <div class="navbar-fld-lctn navbar-collapse fld-location-links">
            <ul class="ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label id="drop">Buruburu.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <a href="#" onclick="toggle_field_data1_sctn();" title="From Rabai/Jogoo Road Junction to Pentecostal Church Rabai">Area | Data 1</a>
                      <a href="#" onclick="toggle_field_data2_sctn();" title="From Pentecostal Church Rabai to Jericho Mkt">Area | Data 2</a>
                      <a href="#" onclick="toggle_field_data3_sctn();" title="From Jericho Market Rabai Rd to Buruburu Jn.">Area | Data 3</a>
                      <a href="#" onclick="toggle_field_data4_sctn();" title="From Buruburu Jn to Rabai/Mumias Rd Round Abt.">Area | Data 4</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label id="drop">Upper Hill.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <a href="#" onclick="toggle_field_data5_sctn();" title="From Hospital Rd/Ngong' Avenue through Fortis Suites, Mara Rd">Area | Data 1</a>
                      <a href="#" onclick="toggle_field_data6_sctn();" title="From Mara/Chyulu Rd Jn, CIC Plaza, Kilimanjaro Avenue">Area | Data 2</a>
                      <a href="#" onclick="toggle_field_data7_sctn();" title="From Kilimanjaro/Longonot Rd Jn, TSC HQ, Crowne Plaza">Area | Data 3</a>
                      <a href="#" onclick="toggle_field_data8_sctn();" title="From Elgon/Matumbato Rd Jn Opp KCB Towers, Longonot/Hospital Rd">Area | Data 4</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label id="drop">Nairobi CBD.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <a href="#" onclick="toggle_field_data9_sctn();" title="Kenyatta Avenue">Area | Data 1</a>
                      <a href="#" onclick="toggle_field_data10_sctn();" title="Moi Avenue">Area | Data 2</a>
                  </div>
                </div>
              </li>
              <li><a href="#" onclick="toggle_field_data11_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Highrise.</a></li>
              <li><a href="#" onclick="toggle_field_data12_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Enterprise Road.</a></li>
              <li><a href="#" onclick="toggle_field_data13_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Golf Course Kibera.</a></li>
              <li><a href="#" onclick="toggle_field_data14_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Hurlingham.</a></li>
              <li><a href="#" onclick="toggle_field_data15_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Kilimani.</a></li>
              <li><a href="#" onclick="toggle_field_data16_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Langata.</a></li>
              <li><a href="#" onclick="toggle_field_data17_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Lavington.</a></li>
              <li><a href="#" onclick="toggle_field_data18_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Monrovia market-parliament.</a></li>
              <li><a href="#" onclick="toggle_field_data19_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Ngara.</a></li>
              <li><a href="#" onclick="toggle_field_data20_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Ngummo Estate.</a></li>
              <li><a href="#" onclick="toggle_field_data21_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Parklands.</a></li>
              <li><a href="#" onclick="toggle_field_data22_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;Uhuru.H-Univ.Way-Haile.S Ave.</a></li>
            </ul>
          </div><br>
      <div class="field_data1_sctn" id="field_data1_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data1.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 1 section -->
      <div class="field_data2_sctn" id="field_data2_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data2.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 2 section -->
      <div class="field_data3_sctn" id="field_data3_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data3.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 3 section -->
      <div class="field_data4_sctn" id="field_data4_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data4.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 4 section -->
      <div class="field_data5_sctn" id="field_data5_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data5.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 5 section -->
      <div class="field_data6_sctn" id="field_data6_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data6.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 6 section -->
      <div class="field_data7_sctn" id="field_data7_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data7.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 7 section -->
      <div class="field_data8_sctn" id="field_data8_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data8.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 8 section -->
      <div class="field_data9_sctn" id="field_data9_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data9.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9 section -->
      <div class="field_data10_sctn" id="field_data10_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data10.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 10 section -->
      <div class="field_data11_sctn" id="field_data11_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data11.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 11 section -->
      <div class="field_data12_sctn" id="field_data12_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data12.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 12 section -->
      <div class="field_data13_sctn" id="field_data13_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data13.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 13 section -->
      <div class="field_data14_sctn" id="field_data14_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data14.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 14 section -->
      <div class="field_data15_sctn" id="field_data15_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data15.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 15 section -->
      <div class="field_data16_sctn" id="field_data16_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data16.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 16 section -->
      <div class="field_data17_sctn" id="field_data17_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data17.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 17 section -->
      <div class="field_data18_sctn" id="field_data18_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data18.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 18 section -->
      <div class="field_data19_sctn" id="field_data19_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data19.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 19 section -->
      <div class="field_data20_sctn" id="field_data20_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data20.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 20 section -->
      <div class="field_data21_sctn" id="field_data21_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data21.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 21 section -->
      <div class="field_data22_sctn" id="field_data22_sctn">
        <?php include "Field_measurement_data/fld_msrmnt_data22.php" ?>
        <!-- extends data file -->
      </div>
            <!-- field data 22 section -->
    </div>
    </div>
  <!-- /#page-content-wrapper -->
</div>
    <script>
      // sections toggle handlers----------
      function toggle_field_data1_sctn(){
        document.getElementById("field_data1_sctn").style.display = "block";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data1 section
      function toggle_field_data2_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "block";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data2 section
      function toggle_field_data3_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "block";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data3 section
      function toggle_field_data4_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "block";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data4 section
      function toggle_field_data5_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "block";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data5 section
      function toggle_field_data6_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "block";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data6 section
      function toggle_field_data7_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "block";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data7 section
      function toggle_field_data8_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "block";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data8 section
      function toggle_field_data9_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "block";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data9 section
      function toggle_field_data10_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "block";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data10 section
      function toggle_field_data11_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "block";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data11 section
      function toggle_field_data12_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "block";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data12 section
      function toggle_field_data13_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "block";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data13 section
      function toggle_field_data14_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "block";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data14 section
      function toggle_field_data15_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "block";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data15 section
      function toggle_field_data16_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "block";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data16 section
      function toggle_field_data17_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "block";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data17 section
      function toggle_field_data18_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "block";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data18 section
      function toggle_field_data19_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "block";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data19 section
      function toggle_field_data20_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "block";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data20 section
      function toggle_field_data21_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "block";
        document.getElementById("field_data22_sctn").style.display = "none";
      }//displays field data21 section
      function toggle_field_data22_sctn(){
        document.getElementById("field_data1_sctn").style.display = "none";
        document.getElementById("field_data2_sctn").style.display = "none";
        document.getElementById("field_data3_sctn").style.display = "none";
        document.getElementById("field_data4_sctn").style.display = "none";
        document.getElementById("field_data5_sctn").style.display = "none";
        document.getElementById("field_data6_sctn").style.display = "none";
        document.getElementById("field_data7_sctn").style.display = "none";
        document.getElementById("field_data8_sctn").style.display = "none";
        document.getElementById("field_data9_sctn").style.display = "none";
        document.getElementById("field_data10_sctn").style.display = "none";
        document.getElementById("field_data11_sctn").style.display = "none";
        document.getElementById("field_data12_sctn").style.display = "none";
        document.getElementById("field_data13_sctn").style.display = "none";
        document.getElementById("field_data14_sctn").style.display = "none";
        document.getElementById("field_data15_sctn").style.display = "none";
        document.getElementById("field_data16_sctn").style.display = "none";
        document.getElementById("field_data17_sctn").style.display = "none";
        document.getElementById("field_data18_sctn").style.display = "none";
        document.getElementById("field_data19_sctn").style.display = "none";
        document.getElementById("field_data20_sctn").style.display = "none";
        document.getElementById("field_data21_sctn").style.display = "none";
        document.getElementById("field_data22_sctn").style.display = "block";
      }//displays field data22 section

      // sections toggle handlers----------
      function pdf_embed_display(){
        document.getElementById("pdf_embed").style.display = "block";
        document.getElementById("pdf_embed_display").style.display = "none";
        document.getElementById("pdf_embed_display_hide").style.display = "block";
      }
      function pdf_embed_hide(){
        document.getElementById("pdf_embed").style.display = "none";
        document.getElementById("pdf_embed_display").style.display = "block";
        document.getElementById("pdf_embed_display_hide").style.display = "none";
      }
					//navbar script handler
			$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
			});
    </script>
    <!-- /#wrapper -->
  <!-- footer -->
  <?php
    include 'includes/footer.php'
  ?>
</body>
</html>
