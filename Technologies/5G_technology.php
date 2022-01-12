<?php
    session_start();
        // tracks user session
    include 'header.php';
        // extends header file
?>
	<header>
      <link rel="stylesheet" href="Graph_handlers/technology_intro_sctn.css">
    <link href="../includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="../includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="../includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="../includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="../includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="../includes/admin/tables_handler/numeric-input-example.js"></script>

		<link rel="stylesheet" type="text/css" href="../includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>CS-IS-EE RF Project | 2G Technology</title>
		<style type="text/css">
			a.side-bar-item3-4{
				background-color: #ddd !important;
				text-decoration: underline 1px solid #222;
				color: #405580;
			}
		</style>
	</header>
			<div class="section-ttl">
				<h2 class="h-title">5G Network Technology</h2>
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
                          $query = "SELECT * FROM 5G_technology";
                          $result = mysqli_query($connect, $query);
                          include("Graph_handlers/rf_properties_dfn.php");
                              // extends properties dfn file
                          $result_info = mysqli_query($connect, $query);
                          $technology = "5G Network";
                     ?>
                     <?php while ($row1 = mysqli_fetch_array($result_info)):; ?>
                           <tr>
                             <td class="id_column"><?php echo "$row1[0]"; ?></td>
                             <td class="1st_column" style="background-color: #ccc;"><?php echo "$row1[1]"; ?></td>
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
                      include("Graph_handlers/5G_technology_table_toggle_handler.php");
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
