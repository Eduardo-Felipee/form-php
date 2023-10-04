<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .minha-fonte {
            color: green;
            font-weight: bold;
            font-style: italic;
        }
    </style>
    <title>Formulário 1</title>
</head>
<body>
    <?php
        $curso = "Faz o L";
    ?>

    <h1>Bem vindos ao <?php echo "<span class='minha-fonte'>$curso</span>" ?></h1>

    <form method="post" action="tratamento.php">
      <p><label for="name">Nome Completo:</label></p>
      <p><input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo"></p>



    <form method="post" action="tratamento.php">
    <p><label for="idade">Diga a sua idade:</label></p>
    <p><input type="text" name="idade" id="idade" placeholder="Digite a sua idade"></p>


    <p><input type="submit" value="Enviar formulário"></p> 
    </form>
</body>
</html>