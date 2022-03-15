<?php

$NOME = $_REQUEST['nome'];
$IDADE  =$_REQUEST['idade'];
$BEBIDA = $_REQUEST['bebida'];
$ANO_ATUAL = date('Y');
$IDADE2 = date("Y", strtotime($IDADE));

$IDADE = $ANO_ATUAL - $IDADE2;


if(empty($NOME) || empty($IDADE) || empty($BEBIDA)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'existem campos obrigatórios não preenchidos'
    );
} else {

    if($IDADE >= 18 && $BEBIDA == "1"){
        $dados = array(
            "tipo" => 'caipirinha.jpg',
            "mensagem" => 'Você pode consumir bebida alcólica',
            "debug" => $IDADE2
        );
    } else {
        $dados = array(
            "tipo" => 'caipirinha.jpg',
            "mensagem"=> 'Você não pode consumir bebida alcólica'
        );
    }

    if($BEBIDA == "2"){
        $dados = array(
            "tipo" => 'refrigerante.jpg',
            "mensagem" => 'Você pode consumir essa bebida'
        );
    } else if ($BEBIDA == "3"){
        $dados = array(
            "tipo" => 'agua-gas.jpg',
            "mensagem" => 'Você pode consumir essa bebida'
        );
    }

}

echo json_encode($dados);