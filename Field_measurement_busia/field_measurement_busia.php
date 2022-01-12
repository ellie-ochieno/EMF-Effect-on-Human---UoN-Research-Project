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
      label.pdf_embed_display,
      label.pdf_embed_data2_display,
      label.pdf_embed_data3_display,
      label.pdf_embed_data4_display,
      label.pdf_embed_display_hide,
      label.pdf_embed_data2_display_hide,
      label.pdf_embed_data3_display_hide,
      label.pdf_embed_data4_display_hide{
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
      label.pdf_embed_display_hide:hover,
      label.pdf_embed_data2_display_hide:hover,
      label.pdf_embed_data3_display_hide:hover,
      label.pdf_embed_data4_display_hide:hover{
        text-decoration: underline;
        background-color: #ddd !important;
      }
      #pdf_embed,
      #pdf_embed_data2,
      #pdf_embed_data3,
      #pdf_embed_data4,
      #pdf_embed_display_hide,
      #pdf_embed_data2_display_hide,
      #pdf_embed_data3_display_hide,
      #pdf_embed_data4_display_hide{
        display: none;
      }
    </style>
    <title>Busia Region Field Measurements</title>
  </header>
      <div class="section-ttl"></div>
          <div class="section-ttl">
            <h4 class="h-title-fld-info">Busia Region Field Measurements</h4>
          </div>
          <div class="navbar-fld-lctn navbar-collapse fld-location-links">
            <ul class="fld_lctn ml-auto mt-2 mt-lg-0">
              <li class="fld_lctn_item fld_data1" type="button" onclick="toggle_field_data1_sctn();"><i class="fas fa-map-marker-alt" style="color: darkgrey;" title="On Busia-Bumala Road"></i>&nbsp;Busia Town.</li>
            </ul>
          </div><br>
      <div class="field_data1_sctn" id="field_data1_sctn">
        <?php include "fld_msrmnt_data1.php"; ?>
        <!-- extends data file -->
      </div>
            <!-- field data 1 section -->
    </div>
    </div>
  <!-- /#page-content-wrapper -->
</div>
    <script>
      // sections toggle handlers----------
      function toggle_field_data1_sctn(){
        document.getElementById("field_data1_sctn").style.display = "block";
      }//displays field data1 section

      // sections toggle handlers----------
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
