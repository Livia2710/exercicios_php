<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Loops PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle e Repetição (Loops)</h1>
    <hr>
    <h2 class="destaque">While (enquanto)</h2>


    <?php 

      $i = 1;
   
      while ($i <= 5) {
        ?>

        <p><?=$i?></p>

    <?php
          $i = $i + 1;
          $i ++;//incremento
      }

    ?>


<hr>
<!-- _______________________________________________________________________________ -->

    <h2 class="destaque">do/while (repita)</h2>


    <?php
      $j = 1;
        do { //Faça
    ?>
      <div><p><h3>Olá</h3></p></div>
    
    <?php
      $j++;

    
    } while ($j <=3); //Enquanto
     ?>

<hr>
<!-- _______________________________________________________________________________ -->
    <h2 class="destaque">For</h2>

<?php
    // Laço For
    // para i de 1 até 10 faça

    //Controle; Condição; Atualização

    for($i =1; $i <=10; $i++) {
        //Linha abaixo concatena (junta)
        echo $i." ";
    }

 ?>
 <!-- _______________________________________________________________________________ -->

 <!-- Exercício
      1) Crie um array com os meses do ano
      2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada
 -->
<hr>
    <h2 class="destaque">Exercício meses</h2>

<?php

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro");
?>
    <ol>


       <?php
       for($nmeses=0; $nmeses<= 11; $nmeses++){
    

       ?>

            <li><?=$meses[$nmeses]?></li>

      <?php
     
       }

       ?>




    </ol>

<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">foreach (para cada)</h2>

<ol>


    <?php

    foreach($meses as $mes) {
        

    ?>
            <li><?=$mes?></li>
        <?php
    }
    ?>
    

</ol>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Array associativo</h2>
    <?php
        $clubes = [
            "Corinthians" => "Timão",
            "Palmeiras" => "Porco",
            "São Paulo" => "Tricolor",
            "Santos" => "Peixe",

        ];

        foreach($clubes as $clube => $apelido){



    ?>
    <p>
         O <?=$clube?> é conhecido como <?=$apelido?>
    </p>
    <?php
    }
    ?>



<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Matriz (Associativa)</h2>
<?php

$alunos = [

              [
                  "nome" => "Chaves",
                  "idade" => 8

              ],
              [
                  "nome" => "Chapolin",
                  "idade" => 20

              ],
              [
                  "nome" => "Chiquinha",
                  "idade" => 10

              ]
          ];

    foreach($alunos as $aluno){
?>

  <p>Nome: <?=$aluno['nome']?></p>
  <p>Idade: <?=$aluno['idade']?></p>
  <hr>
  

<?php
    }
?>

</body>
</html>