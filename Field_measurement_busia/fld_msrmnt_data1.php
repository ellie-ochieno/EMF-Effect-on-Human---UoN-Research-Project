
  <header>
    <style type="text/css">
      #pdf_embed_display_hide,
      #img_chart_graph,
      #img_line_graph,
      #pdf_embed{
        display: none;
      }
      label.pdf_charts_display{
        width: 26%;
        font-size: 18px;
        margin: 4% 1%;
        padding: .4% 4%;
        background-color: #f2f2f2 !important;
        cursor: pointer;
        color: #6666ff;
        border-radius: 8px;
        text-align: center;
      }
      label.pdf_embed_display:hover,
      label.pdf_charts_display:hover,
      label.pdf_embed_display_hide:hover{
        text-decoration: underline;
        background-color: #ddd !important;
      }
      </style>
    <title>Field Data | Busia Town</title>
  </header>
      <div class="container intro-section">
        <div class="google_map_main_sctn" id="google_map_main_sctn">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.76216343996!2d34.2018174!3d0.3039927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177f942c22d77f6d%3A0xa28bf16b89953a57!2sBumala!5e0!3m2!1sen!2ske!4v1630311286374!5m2!1sen!2ske" width="600" height="450" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="google_map_info_sctn" id="google_map_info_sctn">
          <h3> <u>Field location</u> </h3>
          <span>
            <b>Busia Town</b> <br>
            Field measurements taken from Busia-Bumala Road.
          </span><br>
        </div>
        <div class="sections-seperator">
          <hr>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
      </div>
      <div class="img_preview_sctn"><br><br>
        <span class="title_info">Recorded electric field strength [<b>E</b>] variation at different points</span>
        <div class="img_preview">
          <a target="_blank" href="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_graph.png">
          <img src="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_graph.png" alt=""></a>
        </div>
        <div class="high_e_field_lctns" style="display: none;">
          <u><b>Areas with E-Field above 2[<span>V/m</span>]</b></u><br>
          <span><i class="fas fa-check-double" style="color: maroon;"></i>&nbsp;<b style="color: #666;">[V/m]</b></span>
        </div>
      </div>
      <div class="pdf_charts_sctn" id="pdf_charts_sctn">
        <label class="pdf_charts_display" id="pdf_charts_display" onclick="pdf_embed_display_chart_graph();" type="button" title="Probability density function chart graph">PDF chart graph</label>
        <label class="pdf_charts_display" id="pdf_charts_display" onclick="pdf_embed_display_line_graph();" type="button" title="Probability density function line graph">PDF line graph</label>
        <br>
        <small style="margin-left: 2%; color: #777;"><i><b>PDF</b> -> Probability density function</i></small>
        <div class="img_preview" id="img_chart_graph">
          <a target="_blank" href="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_PDF_graph.png">
          <img src="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_PDF_graph.png" alt=""></a>
          <label class="pdf_charts_display" id="graph_hide" onclick="hide_graph();" type="button">Hide graph</label>
        </div>
        <div class="img_preview" id="img_line_graph">
          <a target="_blank" href="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_PDF_line_graph.png">
          <img src="../static/Field_measurement/Busia/Busia_Bumala_Road_e_field_PDF_line_graph.png" alt=""></a>
          <label class="pdf_charts_display" id="graph_hide" onclick="hide_graph();" type="button">Hide graph</label>
        </div>
      </div>
      <label class="pdf_embed_display" id="pdf_embed_display" onclick="pdf_embed_display();" type="button">View recorded field data</label>
      <label class="pdf_embed_display_hide" id="pdf_embed_display_hide" onclick="pdf_embed_hide();" type="button">Hide</label>
      <div class="pdf_embed" id="pdf_embed"><br>
        <embed src="../static/Field_measurement/Busia/BUSIA_e_field_data.pdf" type="application/pdf" width="94%" height="600px" />
        <br>
      </div>
      <script>
      function pdf_embed_display_chart_graph(){
        document.getElementById("img_chart_graph").style.display = "block";
        document.getElementById("img_line_graph").style.display = "none";
      }
      function pdf_embed_display_line_graph(){
        document.getElementById("img_chart_graph").style.display = "none";
        document.getElementById("img_line_graph").style.display = "block";
      }
      function hide_graph(){
        document.getElementById("img_chart_graph").style.display = "none";
        document.getElementById("img_line_graph").style.display = "none";
      }
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
      </script>
