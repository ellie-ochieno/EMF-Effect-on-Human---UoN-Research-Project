
<!-- -----------------3G NETWORK SAR VALUES GRAPH GENERATOR--------------------- -->
<p><span class="toggle_btn_action" style="display: none;"></span> </p>
  <!-- forms global object for graph var dynamic dfn -->
<button class="btn btn-dlt toggle_table" type="button" onclick="toggle_action_handler()">Graph</button>
  <!-- toggle table dispaly -->
  <select name="display_option" id="toggle_graph">
    <option class="input100" value=""></option>
    <span class="focus-input100"></span>
    <option class="label-input100" type="text" value="hide" selected>Hide</option>
    <option class="label-input100" type="text" value="show">Show</option>
  </select><br>
      <!-- -----------sample table display section----------- -->


<div class="container" id="tbl_display_graph">
  <canvas id="sample_chart"></canvas>
      <!-- ----display option---- -->
        <div class="input-group wrap-input100 validate-input">
          <button class="btn btn-dlt toggle_table toggle_table_btn" type="button" onclick="graph_type_handler()">Reload graph</button>
              <!-- ----display option----	 -->
          <select name="graph_type" id="graph_type">
            <option class="input100" value=""></option>
            <span class="focus-input100"></span>
            <option class="label-input100" type="text" value="" selected>Select graph</option>
            <option class="label-input100" type="text" value="line">Line graph</option>
            <option class="label-input100" type="text" value="pie">Pie</option>
            <option class="label-input100" type="text" value="horizontalBar">Horizontal bar graph</option>
            <option class="label-input100" value="doughnut">Doughnut graph</option>
            <option class="label-input100" value="radar">Radar graph</option>
          </select><br>
        </div>
        <p><span class="graph" style="display: none;"></span> </p>
            <!-- forms global object for graph var dynamic dfn -->

  <script>
    var graph_id;
    let chart_var = document.getElementById('sample_chart').getContext('2d');
        // creates chart object

    function graph_type_handler(){
        // var graph_id = document.getElementById("graph_type").value;
      selectElement = document.querySelector('#graph_type');
        //grabs graph type from the input
      graph = selectElement.value;
      document.querySelector('.graph').textContent = graph;
      graph_id = graph;
        //get graph type from uselection
        reloadGraph();
    }
//------handles line chart graphs---------
    function reloadGraph(){
      Chart.defaults.global.defaultFontFamily = 'Lato';
      Chart.defaults.global.defaultFontSize = 18;
      Chart.defaults.global.defaultFontColor = '#777';
      <?php
          include("../includes/db_connector_string.php");
              //extends db connection file
           $query = "SELECT * FROM 3G_technology";
           $num_of_rows = "SELECT count(*) FROM 3G_technology";
           $result = mysqli_query($connect, $query);
           $technology = "3G Network";
                // creates connection and fetch from db table[3G_technology]
      ?>

      let sarChart = new Chart(sample_chart, {
        type: graph_id,
        data:{
        labels:['Skin', 'Fat', 'Bone', 'Brain'],
        datasets:[{
          label: '3G Network SAR',
          data:[
                <?php while ($row1 = mysqli_fetch_array($result)):; ?>
                <?php echo "$row1[6]".","; ?>
                <?php endwhile; ?>
                <?php $connect-> close(); ?>
                        // populate from db
                ],
                backgroundColor: ['transparent'],
                borderColor:['blue'],
                borderWidth: 3,
                hoverBorderWidth: 1.4,
                hoverBorderColor: '#333',

                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)'
                ]
            }]
        },
        options:{
            title:{
            display:true,
            text: '3G Network SAR Graph',
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

           <!-- ---------controls toggling handler--------- -->
<script>
   var toggle_action;
   function toggle_action_handler(){
       // var graph_id = document.getElementById("graph_type").value;
     selectElement1 = document.querySelector('#toggle_graph');
       //grabs graph type from the input
     toggle_btn_action = selectElement1.value;
     document.querySelector('.toggle_btn_action').textContent = toggle_btn_action;
     toggle_action = toggle_btn_action;
       //get graph type from uselection
     if(toggle_action==="show"){
       toggleTableON();
         //dispalys table
     }
     if(toggle_action==="hide"){
       toggleTableOFF();
         //hides table
     }
   }
   function toggleTableON() {
     document.getElementById("tbl_display_graph").style.display = "block";
   }
   function toggleTableOFF() {
     document.getElementById("tbl_display_graph").style.display = "none";
   }
</script>
          <!-- ---------controls toggling handler--------- -->
