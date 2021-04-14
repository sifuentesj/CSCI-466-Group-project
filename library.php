
<?php
//Draw Tables
function draw_table($rows){  //function
    echo "<table border=1 cellspacing=1>";
    echo "<tr>";
    foreach($rows[0] as $key => $item){ //row as keys
      echo "<th>$key</th>" ;
    } // rows as key
    echo "</tr>";

    foreach($rows as $row){  // row as rows
      echo"<tr>";
      foreach($row as $key => $item){  // row as key
         echo "<td>$item</td>";
      } // row as key
      echo "</tr>";
    } //for each row as rows
     echo "</table>";

//finsh drawing
     }  //function
?>


