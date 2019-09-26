<?php
  session_start();

  define("ESTUDO", "estudantes.csv");

  function redirect($url) {
    header("Location: $url");
  }
  
?>