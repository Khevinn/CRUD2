<?php
  require_once "sessao.php";

  foreach ($_POST as $escola => $value) {
    $$escola = $value;
  }     
    $fp = fopen(ESTUDO, "a");
    fwrite($fp, $newItem);
    fclose($fp);
  }  
  redirect("http://localhost:8000/escola.php");