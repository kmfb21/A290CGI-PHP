<?

  $result = mysql_connect('silo.soic.indiana.edu:11006', 'bofang', '0');
  if ($result) {
    if (mysql_select_db("tournament")) {
      echo "I can select the database. <p>";
      $query = "select * from players";
      $result = mysql_query($query);
      if (! $result) echo "I don't see anything in here. <p>";
      else { 
        $num_cats = mysql_num_rows($result);
        echo "There are " . $num_cats . " records I can see. <p>";

        echo "<table border=\"2\">";
        $i = 0;
        while ($row = mysql_fetch_row($result)) {
          echo "<tr>";
          $i++;
          echo "<td align=\"center\" style=\"width:120px; height: 21px;\" valign=\"middle\">" . $i . "</td>";
          $j = 0;
          while ($j!=3) {
            echo "<td align=\"center\" style=\"width:120px; height: 21px;\" valign=\"middle\">" . $row[$j] . "</td>";
            $j++;
          }
          echo "</tr>";
        }
        echo "</table>";

      } 
    } else {
      echo "I can connect but I can't select the database. <p>";
    }
  } else {
    echo "I cannot connect. <p>";
  }
?>
