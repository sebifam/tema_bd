<form action="create_produs.php" method="POST">
  Descriere <br/>
  <textarea name="descriere_produs"></textarea><br/>
  Pret <br/>
  <input type="text" name="pret_produs"/><br/>
  Cantitate <br/>
  <input type="number" name="cantitate"/> <br/>

  <button type="submit">Adauga</button>
</form>
<?php

require 'produse.php';

?>
