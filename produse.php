<?php

require 'connect.php';

$sql = "SELECT id_produs_meniu, descriere_produs, pret_produs, cantitate FROM meniu";
$result = $conn->query($sql);
?>

<?php if ($result->num_rows > 0) { ?>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Descriere</th>
    <th>Pret</th>
    <th>Cantitate</th>
    <th></th>
  </tr>
<?php } ?>
<?php
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<tr>';
        echo '<td>' . $row["id_produs_meniu"]. '</td>';
        echo '<td>' . $row["descriere_produs"]. '</td>';
        echo '<td>' . $row["pret_produs"]. 'RON</td>';
        echo '<td>' . $row["cantitate"]. '</td>';
        echo '<td><a href="sterge_produs.php?id_produs=' . $row["id_produs_meniu"]. '">Sterge</a></td>';
      echo '</tr>';
    }
  } else {
      echo "0 results";
  }
  $conn->close();
?>
</table>
