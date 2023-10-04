<?php
if (empty($_POST['nome']) || empty($_POST['idade'])) {

} else {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo $nome . " , " . $idade;
}
 if ($idade  >=18) {
    echo "Seu nome é  $nome, você tem $idade anos de idade e pode acessar o nosso site!";

 } else {
    echo "Seu nome é $nome; você tem $idade anos de idade e você não pode acessar o nosso site!";
 }

?>