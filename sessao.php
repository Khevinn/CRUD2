<?php
  session_start();

  define("ESTUDO", "escolas.csv");

  function redirect($url) {
    header("Location: $url");
  }
  
?>