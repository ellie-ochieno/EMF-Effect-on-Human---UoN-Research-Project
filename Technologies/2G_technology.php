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

    <link rel="stylesheet" href="Graph_handlers/technology_intro_sctn.css">
		<link rel="stylesheet" type="text/css" href="../includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>CS-IS-EE RF Project | 2G Technology</title>
		<style type="text/css">
			a.side-bar-item3-1{
				background-color: #ddd !important;
				text-decoration: underline 1px solid #222;
				color: #405580;
			}
		</style>
	</header>
			<div class="section-ttl">
				<h2 class="h-title">2G Network Technology</h2>
			</div>
      <div class="Introduction-sctn">
        <p>
          <span class="special-terms">2G</span> (or <span class="special-terms">2-G</span>) is short for <span class="special-term">second-generation</span> cellular network. It was commercially launched on the <span class="special-term">GSM</span> standard in Finland by <span class="special-term">Radiolinja</span> (now part of <span class="special-term">Elisa Oyj</span>) in 1991
          following the limitation of its predicessors e.g <span class="special-term">1G Mobile</span> handsets and their support networks to the spread and increase in mobile communication mass adoption. Mobile technology was evolving to be <i>interoperable</i> (i.e inter-operator and international roaming) and <i>affordable</i> (i.e from mobile handsets to services subsription). <br>
          This phenomenal advent of <span class="special-terms">2G</span> technology was as a result of the cooperative efforts that were pioneered by European countries with the formation and work of:
          <ul class="special-list">
            <li><span class="special-terms" style="color: #537895 !important">R21</span>: As early as 1980, the <span class="special-term">Telecommunications Commission of CEPT</span>, its Radiocommunications Working Group and its frequency sub-working group R21 managed to have mobile services added at 900 MHz in the <span class="special-term">International Table of Frequency Allocations</span>, and dedicate a total capacity of 1000 channels (2 x 25 MHz) for new civil mobile use, paving way for the frequency spectrum to be utilized for <span class="special-terms"></span> cellular network;</li>
            <li><span class="special-terms" style="color: #537895 !important">GSM</span>: In 1982, the <span class="special-terms"></span> (<span class="special-term">Groupe Special Mobile</span> by then) working group was formed by the <span class="special-term">Telecommunications Commission of CEPT</span> to harmonize the technical and operational characteristics of a public mobile communications system in the 900 MHz band;</li>
            <li><span class="special-terms" style="color: #537895 !important">ETSI</span>: Established in 1988 to define the standards and technical specification for <span class="special-terms">GSM</span> (<span class="special-term">Global System for Mobile communications</span>) technology. </li>
          </ul></p>
          <p><span class="special-terms">GSM</span> became the predominant <span class="special-terms">2G</span> technology that swept through most parts of the world, and went on to serve 80% of the mobile market in the decades to come. The USA equivalent is <span class="special-term">IS-54</span>, also known as <span class="special-term">Digital-AMPS</span>, which was later replaced by
            <span class="special-term">IS-136</span>. In cases where the 900 MHz frequency range was used for both 1G and 2G systems in Europe, the 1G systems were shut down to make space for the 2G systems. <br>In 1992, for the first time, data service was introduced to the mobile network in addition to voice, namely <span class="special-term">Short Message Service (SMS)</span>, which supports a data rate of 9.6kbps. The first <span class="special-term">SMS</span> was sent by engineer
            <span class="special-term" style="color: #537895 !important;">Neil Papworth</span> on December 3rd, 1992 where he typed "Merry Christmas" from a computer to then Vodafone director Richard Jarvis on an <span class="special-term">Orbitel 901</span> handset.<br><br>
            The three primary benefits of 2G networks over their predecessors were:
          <ul class="special-list2" style="color: #777 !important;">
            <li>Digitally encrypted phone conversations, at least between the mobile phone and the cellular base station but not necessarily in the rest of the network.</li>
            <li>Significantly more efficient use of the radio frequency spectrum enabling more users per frequency band.</li>
            <li>Data services for mobile, starting with SMS text messages.</li>
          </ul></p>
          <div class="img-holder">
            <img class="img-formula"style="width:40%; overflow:hidden; margin-left: 12%;" src="../static/imgs/icons/Old-Cellphones.png" alt="">
          </div><br>
          <p><span class="special-terms">GPRS</span> (<span class="special-term">General Packet Radio Service</span>) also known as 2.5G that supports packet switching for data rates up to 160 kbps was introduced in 1995, and <span class="special-terms">EDGE</span> (<span class="special-term">Enhanced Data Rates for GSM Evolution</span>) also known as 2.75G that supports <span class="special-terms">8PSK</span> modulation for data rates up to 500 kbps was introduced in 1997.<br>
            <span class="special-term">Ericsson</span> became a major manufacturer of 2G network equipment, roughly 40% of 2G calls were made through Ericsson equipment in the 1990s.
        </p>
        <div class="ref-sctn">
          <span class="special-term"><i>(Reference: )</i> </span>
        </div><br>
      </div>
			<div class="container intro-section">
      <div class="sections-seperator">
        <hr>
        <h4><span class="special-terms" style="color: #537895 !important;">Analysis</span> </h4>
      </div>
                <!-- ------table section---- -->

                <div class="tbl_display">
                   <table  style="width:100%">
                     <tr>
                       <!-- <th>Id</th> -->
                       <th>Tissue</th>
                       <th>Thickness<br>[m]</th>
                       <th>Skin depth<br>[m]</th>
                       <th>Power density<br>[S/m]</th>
                       <th>E-field<br>[V/m]</th>
                       <th>SAR value<br>[W/Kg]</th>
                     </tr>
                     <?php
                        include("../includes/db_connector_string.php");
                            //extends db connection file
                        $query = "SELECT * FROM 2G_technology";
                        $result = mysqli_query($connect, $query);
                        include("Graph_handlers/rf_properties_dfn.php");
                            // extends properties dfn file
                        $result_info = mysqli_query($connect, $query);
                        $technology = "2G Network";
                     ?>
                     <?php while ($row1 = mysqli_fetch_array($result_info)):; ?>
                           <tr>
                             <td class="id_column"><?php echo "$row1[0]"; ?></td>
                             <td class="1st_column"><?php echo "$row1[1]"; ?></td>
                             <!--<td class="1st_column" style="background-color: #ccc;"><?php echo "$row1[1]"; ?></td>-->
                             <td><?php echo "$row1[2]"; ?></td>
                             <td><?php echo "$row1[3]"; ?></td>
                             <td><?php echo "$row1[4]"; ?></td>
                             <td><?php echo "$row1[5]"; ?></td>
                             <td><?php echo "$row1[6]"; ?></td>
                           </tr>
                      <?php endwhile; ?>
                   </table>
                   <?php
                       echo "<p><b>Table1.0:</b> Human SAR Values for ". $technology .".</p>";
                    ?>
                </div>
                <!-- ------table section----  -->
                <div class="toggle_graph_section">
                  <?php
                           // -----toggle table handler initial-----
                      include("Graph_handlers/2G_technology_table_toggle_handler.php");
                           // extends bottom of toggle table handler file
                   ?>
                </div>
		</div>
        </div>
      </div>
    <!-- /#page-content-wrapper -->
  </div>
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
