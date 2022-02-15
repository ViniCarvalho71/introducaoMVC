<?php


$NOME = $_REQUEST['nome'];
$ANIMAL = $_REQUEST['animal'];


if(empty($NOME)){
    $dado = array(
        "tipo" => 'error',
        "mesagem" => 'Existem campos obrigatórios não preechidos'
    );
} else {
    switch($ANIMAL){
        case '1' : $dados = array(
         "tipo" => "cachorro.jpg",
         "mensagem" => "Olá, $NOME, seu animal preferido é o cachorro"
        );
        break;
        case '2' : $dados = array(
         "tipo" => "gato.jpg",
         "mensagem" => "Olá, $NOME, seu animal preferido é o gato"
        );
        break;
        case '3' : $dados = array(
          "tipo" => "peixe.jpg",
          "mensagem" => "Olá, $NOME, seu animal preferido é o peixe"
        );
        break;
    }
}

echo json_encode($dados);