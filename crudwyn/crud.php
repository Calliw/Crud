<?php 

include 'config/conexaobd.php';
include 'funcoes.php';

// Cadastrar equipamento
if(isset($_POST['btnCad'])){
    if(!empty($_POST['selecAgencia']) && !empty($_POST['inputNumero']) && !empty($_POST['inputSerie'])){
        $agencia = $_POST['selecAgencia'];
        $numeroEquipamento = $agencia.$_POST['inputNumero'];
        $serie = $_POST['inputSerie'];

        cadastrarEquipamento($agencia, $numeroEquipamento, $serie, $link);
        header('Location:index.php');
    }
}

// Deletar equipamento
if(isset($_POST['btnDel'])){
    $idEquip = $_POST['idEquip'];
    deletaEquipamento($link, $idEquip);
    header('Location:index.php');
}

?>