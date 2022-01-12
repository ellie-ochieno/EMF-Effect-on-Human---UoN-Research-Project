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
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
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
      #field_data13_sctn{
          display: none;
      }
      /* Field data info display files------------------------ */
      label.pdf_embed_display,
      label.pdf_embed_data2_display,
      label.pdf_embed_data3_display,
      label.pdf_embed_data4_display,
      label.pdf_embed_data5_display,
      label.pdf_embed_data6_display,
      label.pdf_embed_data7_display,
      label.pdf_embed_data8_display,
      label.pdf_embed_data9_display,
      label.pdf_embed_data10_display,
      label.pdf_embed_data11_display,
      label.pdf_embed_data12_display,
      label.pdf_embed_data13_display,
      label.pdf_embed_display_hide,
      label.pdf_embed_data2_display_hide,
      label.pdf_embed_data3_display_hide,
      label.pdf_embed_data4_display_hide,
      label.pdf_embed_data5_display_hide,
      label.pdf_embed_data6_display_hide,
      label.pdf_embed_data7_display_hide,
      label.pdf_embed_data8_display_hide,
      label.pdf_embed_data9_display_hide,
      label.pdf_embed_data10_display_hide,
      label.pdf_embed_data11_display_hide,
      label.pdf_embed_data12_display_hide,
      label.pdf_embed_data13_display_hide{
        width: 80%;
        font-size: 18px;
        margin: 4% 4% 4% 8%;
        padding: .4% 4%;
        background-color: #f2f2f2 !important;
        cursor: pointer;
        color: #6666ff;
        border-radius: 20px;
        text-align: center;
      }
      label.pdf_embed_display:hover,
      label.pdf_embed_data2_display:hover,
      label.pdf_embed_data3_display:hover,
      label.pdf_embed_data4_display:hover,
      label.pdf_embed_data5_display:hover,
      label.pdf_embed_data6_display:hover,
      label.pdf_embed_data7_display:hover,
      label.pdf_embed_data8_display:hover,
      label.pdf_embed_data9_display:hover,
      label.pdf_embed_data10_display:hover,
      label.pdf_embed_data11_display:hover,
      label.pdf_embed_data12_display:hover,
      label.pdf_embed_data13_display:hover,
      label.pdf_embed_display_hide:hover,
      label.pdf_embed_data2_display_hide:hover,
      label.pdf_embed_data3_display_hide:hover,
      label.pdf_embed_data4_display_hide:hover,
      label.pdf_embed_data5_display_hide:hover,
      label.pdf_embed_data6_display_hide:hover,
      label.pdf_embed_data7_display_hide:hover,
      label.pdf_embed_data8_display_hide:hover,
      label.pdf_embed_data9_display_hide:hover,
      label.pdf_embed_data10_display_hide:hover,
      label.pdf_embed_data11_display_hide:hover,
      label.pdf_embed_data12_display_hide:hover,
      label.pdf_embed_data13_display_hide:hover{
        text-decoration: underline;
        background-color: #ddd !important;
      }
      #pdf_embed,
      #pdf_embed_data2,
      #pdf_embed_data3,
      #pdf_embed_data4,
      #pdf_embed_data5,
      #pdf_embed_data6,
      #pdf_embed_data7,
      #pdf_embed_data8,
      #pdf_embed_data9,
      #pdf_embed_data10,
      #pdf_embed_data11,
      #pdf_embed_data12,
      #pdf_embed_data13,
      #pdf_embed_display_hide,
      #pdf_embed_data2_display_hide,
      #pdf_embed_data3_display_hide,
      #pdf_embed_data4_display_hide,
      #pdf_embed_data5_display_hide,
      #pdf_embed_data6_display_hide,
      #pdf_embed_data7_display_hide,
      #pdf_embed_data8_display_hide,
      #pdf_embed_data9_display_hide,
      #pdf_embed_data10_display_hide,
      #pdf_embed_data11_display_hide,
      #pdf_embed_data12_display_hide,
      #pdf_embed_data13_display_hide{
        display: none;
      }
		</style>
    <title>Highways E-Field Measurements</title>
	</header>
			<div class="section-ttl"></div>
          <div class="section-ttl">
            <h4 class="h-title-fld-info">Highways Field Measurements</h4>
          </div>
          <div class="navbar-fld-lctn navbar-collapse fld-location-links">
            <ul class="fld_lctn ml-auto mt-2 mt-lg-0">
              <li class="fld_lctn_item fld_data1" type="button" onclick="toggle_field_data1_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Nairobi – Ahero Highway"></i>&nbsp;Nairobi–Ahero Highway.</li>
              <li class="fld_lctn_item fld_data2" type="button" onclick="toggle_field_data2_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Nairobi-Mombasa Highway"></i>&nbsp;Nairobi-Mombasa Highway</li>
              <li class="fld_lctn_item fld_data3" type="button" onclick="toggle_field_data3_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Mombasa-Kilifi Highway"></i>&nbsp;Mombasa-Kilifi Highway</li>
              <li class="fld_lctn_item fld_data4" type="button" onclick="toggle_field_data4_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Mombasa Pirates Beach-Nairobi Highway"></i>&nbsp;Mombasa Pirates Beach-Nairobi Highway</li>
              <li class="fld_lctn_item fld_data5" type="button" onclick="toggle_field_data5_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Mombasa CDB"></i>&nbsp;Mombasa CDB</li>
              <li class="fld_lctn_item fld_data6" type="button" onclick="toggle_field_data6_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Mombasa-Mtito Andei Highway"></i>&nbsp;Mombasa-Mtito Andei Highway</li>
              <li class="fld_lctn_item fld_data7" type="button" onclick="toggle_field_data7_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Ndori-Kisumu Highway"></i>&nbsp;Ndori-Kisumu Highway</li>
              <li class="fld_lctn_item fld_data8" type="button" onclick="toggle_field_data8_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Kisumu-Nairobi Highway"></i>&nbsp;Kisumu-Nairobi Highway</li>
              <li class="fld_lctn_item fld_data9" type="button" onclick="toggle_field_data9_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Rongo-Homabay Highway"></i>&nbsp;Rongo-Homabay Highway</li>
              <li class="fld_lctn_item fld_data10" type="button" onclick="toggle_field_data10_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Thika Road-Nanyuki Highway"></i>&nbsp;Thika Road-Nanyuki Highway</li>
              <li class="fld_lctn_item fld_data11" type="button" onclick="toggle_field_data11_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Limuru Area"></i>&nbsp;Limuru Area</li>
              <li class="fld_lctn_item fld_data12" type="button" onclick="toggle_field_data12_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Limuru-Kimende Highway"></i>&nbsp;Limuru-Kimende Highway</li>
              <li class="fld_lctn_item fld_data13" type="button" onclick="toggle_field_data13_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="Londiani Area Winding Road"></i>&nbsp;Londiani Area Winding Road</li>
            </ul>
          </div>
          <br>
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
      <div class="field_data9_sctn" id="field_data9_sctn">
        <?php include "fld_msrmnt_data9.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 9 section -->
      <div class="field_data10_sctn" id="field_data10_sctn">
        <?php include "fld_msrmnt_data10.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 10 section -->
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
