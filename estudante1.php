<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Estudante</title>
  <link rel="stylesheet" href="stile.css">
  <style>
    table, th, tr, td {
      border: solid;
      border-collapse: collapse;
      text-align: center;
      margin-top: 5%;
      margin-left: 30%;
    }
  </style>

</head>
<body>
<?php 

require 'headd.php';

?>

<?php
    $estudantes = file('estudantes.csv');
    for($i = 0; $i < sizeof($estudantes); $i++) {
        $estudantes[$i] = explode(",", $estudantes[$i]);
    }

     $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas[$i] = explode(",", $escolas[$i]);
    }
    
?>

<div class="teste">
  <table>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Escola</th>
    <th>Idade</th>
    <th>Remover</th>
  </tr>
   <?php foreach($estudantes as $key => $estudante):?>
    <?php list($nome, $email, $escola, $idade) = $estudante ?>

    <tr>
      <td><?= $nome ?></td>
      <td><?= $email ?></td>
      <td><?= $escola ?></td>
      <td><?= $idade ?></td>
      <td><a href="/rmvstudent.php?id=<?= $key ?>"> &otimes; </a></td>
      </tr>
    <?php endforeach?>
  </table>
  
  <form action="addestudante.php" method="POST">
    <a><legend>Cadastro do Estudante</legend></a>
    <input type="text"  name="nome" placeholder="Nome">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="number" name="idade" id="idade" placeholder="Idade">  
    <input type="submit" value="Cadastrar">
    <select name="escolas" id="">
      <?php foreach ($escolas as $value): ?>
        <?php list($nomeEscola) = $value; ?>

      <option value="<?=$nomeEscola?>"><?= $nomeEscola ?></option>
      <?php endforeach ?>
    </select>

  </form>
  </div>




</body>

</html>
