<?php
    session_start();
        // tracks user session
    include 'includes/header.php';
        // extends header file
?>
	<header>
		<link rel="stylesheet" type="text/css" href="includes/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<style type="text/css">
			a.side-bar-item2{
				background-color: #ddd !important;
				text-decoration: underline 1px solid #222;
				color: #405580;
			}
	        table, th {
	          border: 6px solid black;
	          text-decoration: bold;
	          padding: 1% 2%;
	        }
	        .table-section{
	          width: 60%;
	          margin: 2% 3% 2% 6%;
	        }
	        table, th, td {
	          border: 1px solid black;
	        }
	        table {
	          border-spacing: 2px;
	        }
	        .container-graph{
	          width: 80%;
	          margin: 2% 3%;
	          padding: 1% 2%;
	        }
	         #graph_type{
	 	         width: 20% !important;
	 	         background-color: orange;
	 	         opacity: .5;
	 	         color: #000;
	 	         border: 2px solid #777;
	         }
	         label a.pg_reload{
	         	  font-style: italic;
	         	  font-size: 20px;
	         	  font-family: sans-serif;
	         	  margin: 2% 0%;
	         	  text-decoration: underline;
	         }
	         .graph_reload_btn{
	         	  width: auto;
	         	  min-width: 14%;
	         	  padding: .5% 2%;
	         	  background-color: #ddd;
	         	  border: 1px solid #777;
	         	  border-radius: 5px;
	         }
	         .graph_reload_btn:hover{
	         	  background-color: #ccc;
	         }
	         select{
	         	background-color: rgb(184, 184, 148) !important;
	         	opacity: none !important;
	         }
	         select:hover{
	         	background-color: rgb(184, 184, 148, .4) !important;
	         }
           .tbl_display{
              width: 60%;
              margin: 2% 3% 2% 6%;
            }
           .tbl_display table, .tbl_display th {
              border: 6px solid black;
              text-decoration: bold;
              padding: 1% 2%;
            }
            .tbl_display table, .tbl_display th, .tbl_display td {
              border: 1px solid black;
            }
            .tbl_display table {
              border-spacing: 2px;
            }
            .tbl_display th{
                background-color: #777;
                padding: 4% 2%;
                border: 2px solid darkgray;
            }
            .tbl_display td{
                padding: 2% 2%;
                border: 1px solid #777;
                text-align: center;
                background-color: #ddd;
            }
		</style>
	</header>
			<div class="section-ttl">
				<h2 class="h-title">RF Radiation &amp; SAR</h2>
			</div>
			<div class="container intro-section">
				<h3 class="sb-content-title">STEPS for Computing SAR</h3><br>
				<ul style="list-style: none;">
					<li>Step 1: Determine the center frequency</li><br>
					<li>Step 2: Determine the Skin depth</li><br>
					<li>Step 3: Compute/measure the Power density</li><br>
					<li>Step 4: Estimate the tissue Electric field intensity</li><br>
					<li>Step 5: Compute the SAR</li><br>
				</ul>
				<p>
					Permittivity: <img class="img-formula" src="static/imgs/formulas/permittivity.png"><br><br>
					Permeability: <img class="img-formula" src="static/imgs/formulas/permeability.png"><br><br>
					Speed of electromagnetic wave: <img class="img-formula" src="static/imgs/formulas/c.png"><br><br>
				</p>
				<p>
				<h3 class="sb-content-title">Example </h3><br>
					Considering a WiFi router, the brain SAR for growing male/female infant till 36 months (WiFi radio being (5cm away)
					2.5 GHz band operating at frequencies 2400MHz and 2500MHz for lower and upper
					frequencies respectively. Hence from this we have center frequency as fc = 2450 MHz.
					At this frequency we have the tissues electromagnetic properties as given in SAR Tables below with
					peak transmit power of 100mW for OFDM technology.</p>

                <!-- ------table section---- -->
                <div class="table-section tbl_display">
                  <table style="width:100%">
                    <tr>
                      <th>Age[Months]</th>
                      <th>Female SAR[w/kg]</th>
                      <th>Male SAR[w/kg]</th>
                    </tr>
                    <tr>
                      <td>0</td>
                      <td>0.0004429</td>
                      <td>0.0004315</td>
                    </tr>
                    <tr>
                      <td>5.5</td>
                      <td>0.0003842</td>
                      <td>0.0003736</td>
                    </tr>
                    <tr>
                      <td>11.5</td>
                      <td>0.0003615</td>
                      <td>0.0003509</td>
                    </tr>
                      <td>17.5</td>
                      <td>0.0003490</td>
                      <td>0.0003388</td>
                    </tr>
                    <tr>
                      <td>23.5</td>
                      <td>0.0003405</td>
                      <td>0.0003310</td>
                    </tr>
                    <tr>
                      <td>27.5</td>
                      <td>0.0003363</td>
                      <td>0.0003272</td>
                    </tr>
                      <td>31.5</td>
                      <td>0.0003328</td>
                      <td>0.0003234</td>
                    </tr>
                    <tr>
                      <td>35.5</td>
                      <td>0.0003299</td>
                      <td>0.0003215</td>
                    </tr>
                    <tr>
                      <td>36</td>
                      <td>0.0003295</td>
                      <td>0.0003211</td>
                    </tr>
                    <p><b>Table1.0:</b> Male/Female Infant SAR Values for WiFi Sources at 5[cm].</p>
                  </table> <br>
                  <!-- <p>This can also be shown in <i><a href="#">graphical</a></i> representation.</p> -->
                </div>
                <!-- ------table section----  -->

				<div class="container">
					<canvas id="sample_chart"></canvas>
							<!-- ----display option---- -->
		            <div class="input-group wrap-input100 validate-input">
		              <label>See in graph </label><br>
		              <select name="graph_type" id="graph_type">
		                <option class="input100" value=""></option>
		                <span class="focus-input100"></span>
		                <option class="label-input100" type="text" value="line" selected>Line graph</option>
		                <option class="label-input100" type="text" value="pie">Pie</option>
		                <option class="label-input100" type="text" value="horizontalBar">Horizontal bar graph</option>
		                <option class="label-input100" value="doughnut">Doughnut graph</option>
		                <option class="label-input100" value="radar">Radar graph</option>
		              </select><br>
		            </div>
		            <!-- <label><a class="pg_reload" href="SAR_computation.php" ><button type="button" onclick="graph_type_handler()">Reload page</button></a></label><br> -->
					<button class="graph_reload_btn" type="button" onclick="graph_type_handler()">Reload graph</button>
							<!-- ----display option----	 -->
					<p><span class="graph" style="display: none;"></span> </p>
							<!-- forms global object for graph var dynamic dfn -->
					<script type="text/javascript">
						var graph_id;
						let chart_var = document.getElementById('sample_chart').getContext('2d');
								// creates chart object
								//global properties
								//graph type selector fn

						function graph_type_handler(){
								// var graph_id = document.getElementById("graph_type").value;
							selectElement = document.querySelector('#graph_type');
								//grabs graph type from the input
							graph = selectElement.value;
							document.querySelector('.graph').textContent = graph;
							graph_id = graph;
								//get graph type from uselection
							if(graph_id==="line"){
								reloadGraphLine();
									//calls graph generator var
							}
							else{
								reloadGraph();
									//calls graph generator var
							}
						}
			//------handles line chart graphs---------
						function reloadGraphLine(){
							Chart.defaults.global.defaultFontFamily = 'Lato';
							Chart.defaults.global.defaultFontSize = 18;
							Chart.defaults.global.defaultFontColor = '#777';
							let sarChart = new Chart(sample_chart, {
								type: graph_id,
								data:{
									labels:['0', '5.5', '11.5', '17.5', '23.5', '27.5', '31.5', '35.5', '36'],
								datasets:[{
									label: 'Male SAR',
									data:[
										0.0004315,
										0.0003736,
										0.0003509,
										0.0003388,
										0.0003310,
										0.0003272,
										0.0003234,
										0.0003215,
										0.0003211,
									],
						            backgroundColor: ['transparent'],
						            borderColor:['blue'],
						            borderWidth: 3,
						            hoverBorderWidth: 1.4,
						            hoverBorderColor: '#333',
								},
								{
									label: 'Female SAR',
									data:[
										0.0004429,
										0.0003842,
										0.0003615,
										0.0003490,
										0.0003405,
										0.0003363,
										0.0003328,
										0.0003299,
										0.0003295,
									],
							            backgroundColor: ['transparent'],
							            borderColor:['red'],
							            borderWidth: 3,
							            hoverBorderWidth: 1.4,
							            hoverBorderColor: '#333'
								}]
								},
								options:{
									title:{
										display:true,
										text: 'Male/Female-Infant SAR (0-36 Months)',
										fontSize: 24
									},
									legend:{
										position:'right',
										labels:{
											fontColor: '#111'
										}
									},
									layout:{
										padding:{
											left: 50,
											top: 0,
											right: 0,
											bottom: 0
										}
									}
								}
							});
								// bar chart object
						}

			//------handles other chart graphs---------
						function reloadGraph(){
							Chart.defaults.global.defaultFontFamily = 'Lato';
							Chart.defaults.global.defaultFontSize = 18;
							Chart.defaults.global.defaultFontColor = '#777';
							let sarChart = new Chart(sample_chart, {
								type: graph_id,
								data:{
									labels:['0', '5.5', '11.5', '17.5', '23.5', '27.5', '31.5', '35.5', '36'],
								datasets:[{
									label: 'Male SAR',
									data:[
										0.0004315,
										0.0003736,
										0.0003509,
										0.0003388,
										0.0003310,
										0.0003272,
										0.0003234,
										0.0003215,
										0.0003211,
									],
								},
								{
								label: 'Female SAR',
								data:[
									0.0004429,
									0.0003842,
									0.0003615,
									0.0003490,
									0.0003405,
									0.0003363,
									0.0003328,
									0.0003299,
									0.0003295,
									],
					            backgroundColor: ['transparent'],
					            borderColor:['red'],
					            borderWidth: 3,
					            hoverBorderWidth: 1.4,
					            hoverBorderColor: '#333',

				            	backgroundColor: [
					                'rgba(255, 99, 132, 0.6)',
					                'rgba(54, 162, 235, 0.6)',
					                'rgba(255, 206, 86, 0.6)',
					                'rgba(75, 192, 192, 0.6)',
					                'rgba(153, 102, 255, 0.6)',
					                'rgba(255, 159, 64, 0.6)',
					                'rgba(255, 122, 72, 0.6)',
					                'rgba(255, 110, 88, 0.6)'
					            ],
								}]
								},
								options:{
									title:{
										display:true,
										text: 'Male/Female-Infant SAR (0-36 Months)',
										fontSize: 24
									},
									legend:{
										position:'right',
										labels:{
											fontColor: '#111'
										}
									},
									layout:{
										padding:{
											left: 50,
											top: 0,
											right: 0,
											bottom: 0
										}
									}
								}
							});
								// bar chart object
						}
					</script>
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
    include 'includes/footer.php'
  ?>
</body>

</html>
