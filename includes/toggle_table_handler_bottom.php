<!--
creates the final part of toggle table handler -->
<div class="tbl_display" id="tbl_display_sample">
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
     <?php while ($row1 = mysqli_fetch_array($result)):;?>
       <tr>
         <td class="id_column"><?php echo "$row1[0]"; ?></td>
         <td class="1st_column"><?php echo "$row1[1]"; ?></td>
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
           <!-- ---------display table toggling handler--------- -->
<script>
   var toggle_action;
   function toggle_action_handler(){
       // var graph_id = document.getElementById("graph_type").value;
     selectElement = document.querySelector('#toggle_table');
       //grabs graph type from the input
     toggle_btn_action = selectElement.value;
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
     document.getElementById("tbl_display_sample").style.display = "block";
   }
   function toggleTableOFF() {
     document.getElementById("tbl_display_sample").style.display = "none";
   }
</script>
          <!-- ---------display table toggling handler--------- -->
