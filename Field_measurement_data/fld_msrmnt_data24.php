
  <header>
    <style type="text/css">
      #pdf_embed24_display_hide,
      #img_chart_graph,
      #img_line_graph,
      #pdf_embed24{
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
    <title>Field Data | Lari - Nairobi</title>
  </header>
      <div class="container intro-section">
        <div class="google_map_main_sctn" id="google_map_main_sctn">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.5034810394554!2d36.62588909974745!3d-1.009210182208514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f2bf9f3b49453%3A0xe8706a61917f05d2!2sLari%20Hospital!5e0!3m2!1sen!2ske!4v1630410443281!5m2!1sen!2ske" width="600" height="450" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="google_map_info_sctn" id="google_map_info_sctn">
          <h3> <u>Field location</u> </h3>
          <span>
            <b>Nairobi - Lari</b> <br>
            Field measurements taken from Lari Hospital.
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
          <a target="_blank" href="../static/Field_measurement/Nairobi/Lari/lari_e_field.png">
          <img src="../static/Field_measurement/Nairobi/Lari/lari_e_field.png" alt=""></a>
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
          <a target="_blank" href="../static/Field_measurement/Nairobi/Lari/lari_e_field_PDF_chart.png">
          <img src="../static/Field_measurement/Nairobi/Lari/lari_e_field_PDF_chart.png" alt=""></a>
          <label class="pdf_charts_display" id="graph_hide" onclick="hide_graph();" type="button">Hide graph</label>
        </div>
        <div class="img_preview" id="img_line_graph">
          <a target="_blank" href="../static/Field_measurement/Nairobi/Lari/lari_e_field_PDF_line.png">
          <img src="../static/Field_measurement/Nairobi/Lari/lari_e_field_PDF_line.png" alt=""></a>
          <label class="pdf_charts_display" id="graph_hide" onclick="hide_graph();" type="button">Hide graph</label>
        </div>
      </div>
      <label class="pdf_embed_display" id="pdf_embed24_display" onclick="pdf_embed_display();" type="button">View recorded field data</label>
      <label class="pdf_embed_display_hide" id="pdf_embed24_display_hide" onclick="pdf_embed_hide();" type="button">Hide</label>
      <div class="pdf_embed24" id="pdf_embed24"><br>
        <embed src="../static/Field_measurement/Nairobi/Lari/lari_e_field.pdf" type="application/pdf" width="94%" height="600px" />
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
        document.getElementById("pdf_embed24").style.display = "block";
        document.getElementById("pdf_embed24_display").style.display = "none";
        document.getElementById("pdf_embed24_display_hide").style.display = "block";
      }
      function pdf_embed_hide(){
        document.getElementById("pdf_embed24").style.display = "none";
        document.getElementById("pdf_embed24_display").style.display = "block";
        document.getElementById("pdf_embed24_display_hide").style.display = "none";
      }
      </script>
