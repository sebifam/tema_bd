<?php
  require 'connect.php';

  $id_produs = @$_GET['id_produs'];

  if(isset($id_produs)){
    // sql to delete a record
    $sql = "DELETE FROM meniu WHERE id_produs_meniu=" . $id_produs;

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    header("Location: adauga_produs.html.php");
    die();
  } else {
    echo 'ID is required.';
  }
?>
