
<html>
    <head>
        <style>
            .container{
                margin:0 auto;
                width:80%;
                overflow:auto;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
            }
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #A96467;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
            }
            tr:hover {background-color: #FFFF66}
        </style>
    </head>
 </body>
  <div class=container>
<?php
//Draw Tables
function draw_table($rows){  //function
    echo "<table class=gridtable  id=drawnTable>";
    echo"<thead>";
    echo "<tr>";
    foreach($rows[0] as $key => $item){ //row as keys
      echo "<th>$key</th>" ;
    } // rows as key
    echo "</tr>";
   echo"</thead>";
    echo"<tbody>";
     foreach($rows as $row){  // row as rows
      echo"<tr>";
      foreach($row as $key => $item){  // row as key
         echo "<td>$item</td>";
      } // row as key
      echo "</tr>";
    } //for each row as rows
     echo"</tbody>";
     echo "</table>";
//finsh drawing
     }  //function
?>
</div>
</body>
</html>


