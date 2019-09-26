<?php
  include "sessao.php";
  $id = $_GET["id"];
  
  $itens = file("escolas.csv");
  unset($itens[$id]);

  file_put_contents("escolas.csv", implode("", $itens));
  redirect("escola.php");
?>

