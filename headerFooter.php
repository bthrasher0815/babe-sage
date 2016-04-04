<?php
function pageHeader($pt)
{
echo <<<_END
    < a href="
    
    
   
_END;
}

function generateTable($arr, $colNames
{
  echo"<table>";
  echo"<tr>;
  foreach($colNames as $col)
  {
    echo "<th>$col</th>";
  }
  echo "</tr>;
  foreach($arr as $record)
  {
    echo "<tr>";
    foreach($record as $col)
      echo "<td> $col </td>;
    echo "</tr>";
  }
  
  echo "</table>;
}
}

)
