<?php

 		$escolas = "{$_POST['nome']}, {$_POST['estado']},  {$_POST['cidade']}, {$_POST['remover']}  \n";
    $escola = fopen('escolas.csv', 'a');
    fwrite($escola, $escolas);
    header("Location: escola.php"); 

    
?>