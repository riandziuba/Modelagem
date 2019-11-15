
    
<?php

require_once 'autoload.php';
$vetor[1] = $_POST['nome'];
$vetor[2] = $_POST['tipo'];
$tabela = $_POST['tabela'];
$acao = $_POST['acao'];
if ($acao == "inserir") {
    try {
        $banco = new banco;
        $banco->setTabela($tabela);
        $banco->inserir($vetor);
    } catch (Exception $e) {
        $return = "Erro ao inserir o registro no banco de dados.";
        echo $return;
    }
    $return = "Cadastro Concluído";
    echo $return;
}
?>