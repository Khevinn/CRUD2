<?php

 		$estudantes =  "{$_POST['nome']}, {$_POST['email']}, {$_POST["escolas"]}, {$_POST['idade']} , {$_POST['Remover']}, \n";
    $estudante = fopen('estudantes.csv', 'a');
    fwrite($estudante, $estudantes);
    header("Location: estudante1.php"); 

?>


