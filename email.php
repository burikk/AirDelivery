<?php

function get_email($email_params){
  ob_start();
?>
  <style>
    table, td, th {
      border: 1px solid black;
    }
  </style>

  <h1>The form was submitted</h1>

  <p><b>Transport from:</b> <?php echo $email_params["transportFrom"]; ?></p>
  <p><b>Transport to:</b> <?php echo $email_params["transportTo"]; ?></p>
  <p><b>Transport date:</b> <?php echo $email_params["date"]; ?></p>
  <p><b>Plane model:</b> <?php echo $email_params["selectModel"]; ?></p>

  <table>
    <tr>
      <th>Nb</th>
      <th>Name</th>
      <th>Weight</th>
      <th>Type</th>
    </tr>
    <?php 
    for($i = 0; $i < count($email_params["cargoItems"]); ++$i){
      $item = $email_params["cargoItems"][$i];
      echo "<tr>";
      echo "  <td>".($i+1)."</td>";
      echo "  <td>".$item['name']."</td>";
      echo "  <td>".$item['weight']."</td>";
      echo "  <td>".$item['cargo']."</td>";
      echo "</tr>";
    }
    ?>
  </table>
<?php
  $email = ob_get_clean();

  return $email;
}
