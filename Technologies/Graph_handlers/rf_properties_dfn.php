<?php
          // fetch and prints properties info from db
    $row_properties = mysqli_fetch_array($result);
    $center_freq_val = $row_properties[7];
    $power_val = $row_properties[8];
    $head_size_val = $row_properties[9];
    $distance_val = $row_properties[10];
    echo "<h3 class='sb-content-title' style='text-decoration:underline;'>Properties</h3><br>";
    echo "<p>Operating frequency: <b style='color:#777'>".$center_freq_val."[MHz]</b>.</p>";
    echo "<p>Transmitted power: <b style='color:#777'>".$power_val."[W]</b>.</p>";
    echo "<p>Head size[radius]: <b style='color:#777'>".$head_size_val."[m]</b>.</p>";
    echo "<p>Device/Antenna distance: <b style='color:#777'>".$distance_val."[m]</b>.</p><br>";
 ?>
