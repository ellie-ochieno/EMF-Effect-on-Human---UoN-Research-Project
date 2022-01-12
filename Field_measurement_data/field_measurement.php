<?php
    session_start();
        // tracks user session
    include "header.php";
        // extends header file
?>
	<header>
    <link href="../includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="../includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="../includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="../includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="../includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="../includes/admin/tables_handler/numeric-input-example.js"></script>

    <link rel="stylesheet" type="text/css" href="../includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<style type="text/css">
      li a.fld_msrmnt_active{
          color: red !important;
          background-color: #064c67;
      }
      a.field-msrmnt-active{
        background-color: #ddd !important;
        text-decoration: underline 1px solid #222;
        color: #405580;
      }
		</style>
    <title>Nairobi Region Field Measurements</title>
	</header>
			<div class="section-ttl"></div>
          <div class="section-ttl">
            <h4 class="h-title-fld-info">Nairobi Region Field Measurements</h4>
          </div>
          <div class="navbar-fld-lctn navbar-collapse fld-location-links">
            <ul class="fld_lctn ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown" style="padding: .2% .5%; padding-left: 0%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data8" id="drop">Buruburu.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data8_1" type="button" onclick="toggle_field_data1_sctn();" title="From Rabai/Jogoo Road Junction to Pentecostal Church Rabai">Data | Set 1</label>
                      <label class="fld_data8_2" type="button" onclick="toggle_field_data2_sctn();" title="From Pentecostal Church Rabai to Jericho Mkt">Data | Set 2</label>
                      <label class="fld_data8_3" type="button" onclick="toggle_field_data3_sctn();" title="From Jericho Market Rabai Rd to Buruburu Jn.">Data | Set 3</label>
                      <label class="fld_data8_4" type="button" onclick="toggle_field_data4_sctn();" title="From Buruburu Jn to Rabai/Mumias Rd Round Abt.">Data | Set 4</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data9" id="drop">Upper Hill.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data9_1" type="button" onclick="toggle_field_data5_sctn();" title="From Hospital Rd/Ngong' Avenue through Fortis Suites, Mara Rd">Data | Set 1</label>
                      <label class="fld_data9_2" type="button" onclick="toggle_field_data6_sctn();" title="From Mara/Chyulu Rd Jn, CIC Plaza, Kilimanjaro Avenue">Data | Set 2</label>
                      <label class="fld_data9_3" type="button" onclick="toggle_field_data7_sctn();" title="From Kilimanjaro/Longonot Rd Jn, TSC HQ, Crowne Plaza">Data | Set 3</label>
                      <label class="fld_data9_4" type="button" onclick="toggle_field_data8_sctn();" title="From Elgon/Matumbato Rd Jn Opp KCB Towers, Longonot/Hospital Rd">Data | Set 4</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10" id="drop">Kenyatta Avenue.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                    <label class="fld_data9_1" type="button" onclick="toggle_field_data9_1_sctn();" title="Kenyatta Avenue Data Set 1">Data | Set 1</label>
                    <label class="fld_data9_2" type="button" onclick="toggle_field_data9_2_sctn();" title="Kenyatta Avenue Data Set 2">Data | Set 2</label>
                    <label class="fld_data9_3" type="button" onclick="toggle_field_data9_3_sctn();" title="Kenyatta Avenue Data Set 3">Data | Set 3</label>
                    <label class="fld_data9_4" type="button" onclick="toggle_field_data9_4_sctn();" title="Kenyatta Avenue Data Set 4">Data | Set 4</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%; padding-left: 1.2%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10_3" id="drop">Gikomba Mkt.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data10_3_1" type="button" onclick="toggle_field_data10_3_1_sctn();" title="Gikomba market data set 1">Data | Set 1</label>
                      <label class="fld_data10_3_2" type="button" onclick="toggle_field_data10_3_2_sctn();" title="Gikomba market data set 2">Data | Set 2</label>
                      <label class="fld_data10_3_3" type="button" onclick="toggle_field_data10_3_3_sctn();" title="Gikomba market data set 3">Data | Set 3</label>
                      <label class="fld_data10_3_4" type="button" onclick="toggle_field_data10_3_4_sctn();" title="Gikomba market data set 4">Data | Set 4</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10_4" id="drop">Koinange Street.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data10_4_1" type="button" onclick="toggle_field_data10_4_1_sctn();" title="1st to 2nd round about Parliament Rd">Data | Set 1</label>
                      <label class="fld_data10_4_2" type="button" onclick="toggle_field_data10_4_2_sctn();" title="2nd round about, Parliament Rd, National Oil to H.Selassie Avek">Data | Set 2</label>
                      <label class="fld_data10_4_3" type="button" onclick="toggle_field_data10_4_3_sctn();" title="Credit Bank to Emperor Plaza">Data | Set 3</label>
                      <label class="fld_data10_4_4" type="button" onclick="toggle_field_data10_4_4_sctn();" title="Emperor Plaza to 1st Round about Parliament Rd">Data | Set 4</label>
                      <label class="fld_data10_4_5" type="button" onclick="toggle_field_data10_4_5_sctn();" title="Koinange Street City Clock to Credit Bank">Data | Set 5</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%; padding-left: 1.2%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10_5" id="drop">University Way.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data10_5_2" type="button" onclick="toggle_field_data10_5_2_sctn();" title="Bus Stop Sign after UoN Main Gate to Globe B/S Center">Data | Set 1</label>
                      <label class="fld_data10_5_1" type="button" onclick="toggle_field_data10_5_1_sctn();" title="State Hse Rd to Bus Stop Sign after UoN Main Gate">Data | Set 2</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%; padding-left: .2%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10_6" id="drop">UoN BTS(Sch. of Eng.).</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data10_6_1" type="button" onclick="toggle_field_data10_6_1_sctn();" title="UoN BTS to Global Round About">Data | Set 1</label>
                      <label class="fld_data10_6_2" type="button" onclick="toggle_field_data10_6_2_sctn();" title="Around UoN BTS">Data | Set 2</label>
                      <label class="fld_data10_6_3" type="button" onclick="toggle_field_data10_6_3_sctn();" title="From UoN BTS to Main Campus Gate">Data | Set 3</label>
                      <label class="fld_data10_6_4" type="button" onclick="toggle_field_data10_6_4_sctn();" title="From UoN BTS to KBC">Data | Set 4</label>
                      <label class="fld_data10_6_5" type="button" onclick="toggle_field_data10_6_5_sctn();" title="From UoN BTS to Text Book Center Kijabe Street">Data | Set 5</label>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown" style="padding: .2% .5%;">
                <div id="drop-down">
                  <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt" style="color: darkgrey;"></i>&nbsp;<label class="fld_data10_7" id="drop">Rosslyn Riviera.</label></a>
                  <div id="dropdown-menu"  aria-labelledby="navbarDropdown">
                      <label class="fld_data10_7_1" type="button" onclick="toggle_field_data10_7_1_sctn();" title="1st Floor">Data | Set 1</label>
                      <label class="fld_data10_7_2" type="button" onclick="toggle_field_data10_7_2_sctn();" title="2nd  Floor">Data | Set 2</label>
                      <label class="fld_data10_7_3" type="button" onclick="toggle_field_data10_7_3_sctn();" title="3rd Floor">Data | Set 3</label>
                  </div>
                </div>
              </li>
              <li class="fld_lctn_item fld_data11" style="margin-left: .%;" type="button" onclick="toggle_field_data11_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Highrise Estate Nairobi"></i>&nbsp;Highrise Estate.</li>
              <li class="fld_lctn_item fld_data10_2" type="button" onclick="toggle_field_data10_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Moi Avenue Nairobi"></i>&nbsp;Moi Avenue.</li>
              <li class="fld_lctn_item fld_data12" type="button" onclick="toggle_field_data12_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Enterprise Road Nairobi"></i>&nbsp;Enterprise Road.</li>
              <li class="fld_lctn_item fld_data13" type="button" onclick="toggle_field_data13_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Golf Course Kibera Nairobi"></i>&nbsp;Golf Course Kibera.</li>
              <li class="fld_lctn_item fld_data14" type="button" onclick="toggle_field_data14_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Hurlingham Nairobi"></i>&nbsp;Hurlingham.</li>
              <li class="fld_lctn_item fld_data15" type="button" onclick="toggle_field_data15_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Kilimani Nairobi"></i>&nbsp;Kilimani.</li>
              <li class="fld_lctn_item fld_data16" type="button" onclick="toggle_field_data16_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Langata Estate Nairobi"></i>&nbsp;Langata Estate.</li>
              <li class="fld_lctn_item fld_data17" type="button" onclick="toggle_field_data17_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Lavington Nairobi"></i>&nbsp;Lavington.</li>
              <li class="fld_lctn_item fld_data18" type="button" onclick="toggle_field_data18_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Monrovia market-parliament Nairobi"></i>&nbsp;Monrovia mkt-Parliament Rd.</li>
              <li class="fld_lctn_item fld_data19" type="button" onclick="toggle_field_data19_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Ngara Nairobi"></i>&nbsp;Ngara.</li>
              <li class="fld_lctn_item fld_data20" type="button" onclick="toggle_field_data20_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Ngummo Estate Nairobi"></i>&nbsp;Ngummo Estate.</li>
              <li class="fld_lctn_item fld_data21" type="button" onclick="toggle_field_data21_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Parklands Nairobi"></i>&nbsp;Parklands.</li>
              <li class="fld_lctn_item fld_data22" type="button" onclick="toggle_field_data22_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Uhuru.H-Univ.Way-Haile.S Ave."></i>&nbsp;Uhuru.H-Univ.Way-Haile.S Ave.</li>
              <li class="fld_lctn_item fld_data23" type="button" onclick="toggle_field_data23_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Nairobi Aviation College"></i>&nbsp;Nairobi Aviation College.</li>
              <li class="fld_lctn_item fld_data24" type="button" onclick="toggle_field_data24_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Lari Hospital"></i>&nbsp;Lari Hospital.</li>
            </ul>
          </div><br>
      <div class="field_data1_sctn" id="field_data1_sctn">
        <?php include "fld_msrmnt_data1.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 1 section -->
      <div class="field_data2_sctn" id="field_data2_sctn">
        <?php include "fld_msrmnt_data2.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 2 section -->
      <div class="field_data3_sctn" id="field_data3_sctn">
        <?php include "fld_msrmnt_data3.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 3 section -->
      <div class="field_data4_sctn" id="field_data4_sctn">
        <?php include "fld_msrmnt_data4.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 4 section -->
      <div class="field_data5_sctn" id="field_data5_sctn">
        <?php include "fld_msrmnt_data5.php";; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 5 section -->
      <div class="field_data6_sctn" id="field_data6_sctn">
        <?php include "fld_msrmnt_data6.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 6 section -->
      <div class="field_data7_sctn" id="field_data7_sctn">
        <?php include "fld_msrmnt_data7.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 7 section -->
      <div class="field_data8_sctn" id="field_data8_sctn">
        <?php include "fld_msrmnt_data8.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 8 section -->

      <div class="field_data9_1_sctn" id="field_data9_1_sctn">
        <?php include "fld_msrmnt_data9_1.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9_1 section -->
      <div class="field_data9_2_sctn" id="field_data9_2_sctn">
        <?php include "fld_msrmnt_data9_2.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9_2 section -->
      <div class="field_data9_3_sctn" id="field_data9_3_sctn">
        <?php include "fld_msrmnt_data9_3.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9_3 section -->
      <div class="field_data9_4_sctn" id="field_data9_4_sctn">
        <?php include "fld_msrmnt_data9_4.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9_4 section -->

      <div class="field_data10_sctn" id="field_data10_sctn">
        <?php include "fld_msrmnt_data10.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 10 section -->

      <div class="field_data10_3_1_sctn" id="field_data10_3_1_sctn">
      <?php include "fld_msrmnt_data10_3_1.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_3_1 section -->
      <div class="field_data10_3_2_sctn" id="field_data10_3_2_sctn">
      <?php include "fld_msrmnt_data10_3_2.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_3_2 section -->
      <div class="field_data10_3_3_sctn" id="field_data10_3_3_sctn">
      <?php include "fld_msrmnt_data10_3_3.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_3_3 section -->
      <div class="field_data10_3_4_sctn" id="field_data10_3_4_sctn">
      <?php include "fld_msrmnt_data10_3_4.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_3_4 section -->

      <div class="field_data10_4_1_sctn" id="field_data10_4_1_sctn">
      <?php include "fld_msrmnt_data10_4_1.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_4_1 section -->
      <div class="field_data10_4_2_sctn" id="field_data10_4_2_sctn">
      <?php include "fld_msrmnt_data10_4_2.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_4_2 section -->
      <div class="field_data10_4_3_sctn" id="field_data10_4_3_sctn">
      <?php include "fld_msrmnt_data10_4_3.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_4_3 section -->
      <div class="field_data10_4_4_sctn" id="field_data10_4_4_sctn">
      <?php include "fld_msrmnt_data10_4_4.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_4_4 section -->
      <div class="field_data10_4_5_sctn" id="field_data10_4_5_sctn">
      <?php include "fld_msrmnt_data10_4_5.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_4_5 section -->

      <div class="field_data10_5_1_sctn" id="field_data10_5_1_sctn">
      <?php include "fld_msrmnt_data10_5_1.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_5_1 section -->
      <div class="field_data10_5_2_sctn" id="field_data10_5_2_sctn">
      <?php include "fld_msrmnt_data10_5_2.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_5_2 section -->

      <div class="field_data10_6_1_sctn" id="field_data10_6_1_sctn">
      <?php include "fld_msrmnt_data10_6_1.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_6_1 section -->
      <div class="field_data10_6_2_sctn" id="field_data10_6_2_sctn">
      <?php include "fld_msrmnt_data10_6_2.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_6_2 section -->
      <div class="field_data10_6_3_sctn" id="field_data10_6_3_sctn">
      <?php include "fld_msrmnt_data10_6_3.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_6_3 section -->
      <div class="field_data10_6_4_sctn" id="field_data10_6_4_sctn">
      <?php include "fld_msrmnt_data10_6_4.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_6_4 section -->
      <div class="field_data10_6_5_sctn" id="field_data10_6_5_sctn">
      <?php include "fld_msrmnt_data10_6_5.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_6_5 section -->

      <div class="field_data10_7_1_sctn" id="field_data10_7_1_sctn">
      <?php include "fld_msrmnt_data10_7_1.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_7_1 section -->
      <div class="field_data10_7_2_sctn" id="field_data10_7_2_sctn">
      <?php include "fld_msrmnt_data10_7_2.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_7_2 section -->
      <div class="field_data10_7_3_sctn" id="field_data10_7_3_sctn">
      <?php include "fld_msrmnt_data10_7_3.php"; ?>
      <!-- extends data file -->
      </div>
      <!-- field data 10_7_3 section -->

      <div class="field_data11_sctn" id="field_data11_sctn">
        <?php include "fld_msrmnt_data11.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 11 section -->
      <div class="field_data12_sctn" id="field_data12_sctn">
        <?php include "fld_msrmnt_data12.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 12 section -->
      <div class="field_data13_sctn" id="field_data13_sctn">
        <?php include "fld_msrmnt_data13.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 13 section -->
      <div class="field_data14_sctn" id="field_data14_sctn">
        <?php include "fld_msrmnt_data14.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 14 section -->
      <div class="field_data15_sctn" id="field_data15_sctn">
        <?php include "fld_msrmnt_data15.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 15 section -->
      <div class="field_data16_sctn" id="field_data16_sctn">
        <?php include "fld_msrmnt_data16.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 16 section -->
      <div class="field_data17_sctn" id="field_data17_sctn">
        <?php include "fld_msrmnt_data17.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 17 section -->
      <div class="field_data18_sctn" id="field_data18_sctn">
        <?php include "fld_msrmnt_data18.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 18 section -->
      <div class="field_data19_sctn" id="field_data19_sctn">
        <?php include "fld_msrmnt_data19.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 19 section -->
      <div class="field_data20_sctn" id="field_data20_sctn">
        <?php include "fld_msrmnt_data20.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 20 section -->
      <div class="field_data21_sctn" id="field_data21_sctn">
        <?php include "fld_msrmnt_data21.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 21 section -->
      <div class="field_data22_sctn" id="field_data22_sctn">
        <?php include "fld_msrmnt_data22.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 22 section -->
      <div class="field_data23_sctn" id="field_data23_sctn">
        <?php include "fld_msrmnt_data23.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 23 section -->
      <div class="field_data24_sctn" id="field_data24_sctn">
        <?php include "fld_msrmnt_data24.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 24 section -->
    </div>
    </div>
  <!-- /#page-content-wrapper -->
</div>
  <script type="text/javascript" src="page_sctns_control.js">  </script>
  <!-- extends js file with pg sections control functions -->
  <script>
				//navbar script handler
		$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		});
  </script>
    <!-- /#wrapper -->
  <!-- footer -->
  <?php
    include 'footer.php'
  ?>
</body>
</html>
