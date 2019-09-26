<?php
  include "session.php";
  $id = $_GET["id"];
  
  $itens = file("estudantes.csv");
  unset($itens[$id]);

  file_put_contents("estudantes.csv", implode("", $itens));
  redirect("estudante1.php");
?>