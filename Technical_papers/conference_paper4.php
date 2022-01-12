<?php
    session_start();
        // tracks user session
    include 'header.php';
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
    <title>Technical paper | 4</title>
		<style type="text/css">
      a.techncl-pprs-active{
        background-color: #ddd !important;
        text-decoration: underline 1px solid #222;
        color: #405580;
      }
		</style>
	</header>
			<div class="section-ttl">
			</div>
			<div class="container intro-section">
        <h2>
          Evaluation of SAR Profile within the Human <br>
          Body at 2G and 3G Frequencies
        </h2><br>
        <small>
          Harriet Bosibori, Cynthia Waceke, George Brian, Viola Amondi, Nyokabi Waweru and Peter Akuon <br>
          School of Engineering, University of Nairobi. <br>
          Nairobi, Kenya.
        </small>
        <div class="sections-seperator">
          <hr>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div><br>
      </div>
      <br>
      <div class="img_preview">
        <img src="../static/Techncl_pprs/SAR_Evaluation_2Gand3G_Frequencies.png" alt="">
      </div><br>
      <label class="pdf_embed_display" id="pdf_embed_display" onclick="pdf_embed_display();" type="button">View full document</label>
      <label class="pdf_embed_display_hide" id="pdf_embed_display_hide" onclick="pdf_embed_hide();" type="button">Hide document</label>
      <div class="pdf_embed" id="pdf_embed"><br>
        <embed src="../static/Techncl_pprs/SAR_Evaluation_2Gand3GFrequencies.pdf" type="application/pdf" width="94%" height="600px" />
        <br>
      </div>
      </div>
    </div>
  <!-- /#page-content-wrapper -->
</div>
        <script>
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
    include 'footer.php'
  ?>
</body>

</html>
