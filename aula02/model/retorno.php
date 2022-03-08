<?php

$NOME = $_REQUEST['nome'];
$IDADE  =$_REQUEST['idade'];
$BEBIDA = $_REQUEST['bebida'];
$ANO_ATUAL = date('Y');
$IDADE2 = date($ANO_ATUAL, 'Y');



if(empty($NOME) || empty($IDADE) || empty($BEBIDA)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'existem campos obrigatórios não preenchidos'
    );
} else {

    if($IDADE >= 18 && $BEBIDA == "1"){
        $dados = array(
            "tipo" => 'success',
            "mensagem" => 'Você pode consumir bebida alcólica'
        );
    } else {
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Você não pode consumir bebida alcólica'
        );
    }

    if($IDADE < 18  && $BEBIDA == "1" || $BEBIDA == "2"){
        $dados = array(
            "tipo" => 'success',
            "mensagem" => 'Você pode consumir essa bebida mesmo sendo menor de idade'
        );
    }

}

echo json_encode($dados);