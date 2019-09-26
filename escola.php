<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Escola</title>
  <link rel="stylesheet" href="escola.css">
  <style>
    .container  {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

    }
  </style>
   
</head>

<body>
<?php 

require 'headd.php';
 
?>
 
<?php
    $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas[$i] = explode(",", $escolas[$i]);
    }

?>

  <div class="container">

  <table>
  <tr>
    <th>Nome</th>
    <th>Estado</th>
    <th>Cidade</th>
  
  </tr>
   <?php foreach($escolas as $key => $escola):?>
    <tr>
    <?php foreach($escola as $escola1):?>
      <td><?= $escola1?></td>
  <?php endforeach?>
    <td>
    <a class="btn-remove" href="rmvschool.php?id=<?= $key?>"> X </a>
    </td>
      </tr>
    <?php endforeach?>
  </table>
  <form action="addescola.php" method="POST">
     <input type="text"  name="nome" placeholder="Nome">
     <input type="text" name="estado" placeholder="Estado">
     <input type="text" name="cidade" placeholder="Cidade">
      <input type="submit" value="Cadastrar">

      
  </form>
  </div>




</body>

</html>
