
  <header>
    <style type="text/css">
      #pdf_embed_display_hide_data2,
      #pdf_embed_data2{
        display: none;
      }
    </style>
    <title>Field Data | Nairobi-Mombasa Highway</title>
  </header>

			<div class="container intro-section">
        <div class="google_map_main_sctn" id="google_map_main_sctn">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.4259704944734!2d36.91073293632874!3d-1.3658814144036822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18395aa7f93f7acf%3A0x14c79ac21eb0cec!2sMombasa%20Road%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1623225158846!5m2!1sen!2ske" width="600" height="450" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="google_map_info_sctn" id="google_map_info_sctn">
          <h3> <u>Field location</u> </h3>
          <span>
            <b>Highway</b>.<br>
            Field measurements taken on Nairobi-Mombasa Highway.
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
        <a target="_blank" href="../static/Field_measurement/Highways/Nairobi_Mombasa_Highway.png">
        <img src="../static/Field_measurement/Highways/Nairobi_Mombasa_Highway.png" alt=""></a>
      </div>
      <div class="high_e_field_lctns" style="display: none;">
        <u><b>Areas with E-Field above 2[<span>V/m</span>]</b></u><br>
        <span></span><br>
        <span></span>
      </div>
    </div>
      <label class="pdf_embed_display" id="pdf_embed_display_data2" onclick="pdf_embed_display_data2();" type="button">View recorded field data</label>
      <label class="pdf_embed_display_hide" id="pdf_embed_display_hide_data2" onclick="pdf_embed_hide_data2();" type="button">Hide</label>
      <div class="pdf_embed" id="pdf_embed_data2"><br>
        <embed src="../static/Field_measurement/Highways/Nairobi_Mombasa_Highway.pdf" type="application/pdf" width="94%" height="600px" />
        <br>
      </div>
      <script>
      function pdf_embed_display_data2(){
        document.getElementById("pdf_embed_data2").style.display = "block";
        document.getElementById("pdf_embed_display_data2").style.display = "none";
        document.getElementById("pdf_embed_display_hide_data2").style.display = "block";
      }
      function pdf_embed_hide_data2(){
        document.getElementById("pdf_embed_data2").style.display = "none";
        document.getElementById("pdf_embed_display_data2").style.display = "block";
        document.getElementById("pdf_embed_display_hide_data2").style.display = "none";
      }
      </script>
