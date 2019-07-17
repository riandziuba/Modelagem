
    
<?php

require_once 'autoload.php';
$vetor[1] = $_POST['titulo'];
$vetor[2] = $_POST['instituicao'];
$vetor[3] = $_POST['meios'];
$vetor[4] = $_POST['palavra'];
$vetor[5] = $_POST['nivel'];
$vetor[6] = $_POST['tipo'];
$vetor[7] = $_POST['ano'];
$vetor[8] = $_POST['resumo'];
$vetor[9] = $_POST['link'];

if(!empty($_POST['autores']) and is_array($_POST['autores'])){
    $result = implode(' <br> ', $_POST['autores']);
   
} else {
$autores = $_POST['autor'];


}

$orientadores = $_POST['orientador'];
$tabela = $_POST['tabela'];
$acao = $_POST['acao'];
if ($acao == "inserir") {
    try {
        $banco = new banco;
        $banco->setTabela($tabela);
        $banco->inserir($vetor);
        $pesquisa = $banco->select("SELECT max(id) from trabalho");
        
        $vetor2[2] = $pesquisa[0][0];
        $banco->setTabela("autordotrabalho");
        foreach ($autores as $key){
            $vetor2[1] = $key;
            
            $banco->inserir($vetor2);
        }
         
        $banco->setTabela("orientadordotrabalho");
        foreach ($orientadores as $key){
            $vetor2[1] = $key;
            
            $banco->inserir($vetor2);
        }
    } catch (Exception $e) {
        $return = "Erro ao inserir o registro no banco de dados.";
        echo $return;
    }
    $return = "Cadastro Concluído";
    echo $return;
}
?>