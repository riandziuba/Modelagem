<?php
  include 'connect/connect.php';
  $GLOBALS['conexao'] = $conexao;
    function geraSelect($tabela, $codigos, $codigo, $exibir, $nome, $multi)
    {
        $sql = "SELECT * FROM ". $tabela;
        $resultado = mysqli_query($GLOBALS['conexao'], $sql);
        if (!$resultado) {
            printf("Error: %s\n", mysqli_error($GLOBALS['conexao']));
            exit();
        }
        echo "<select name='$nome' ".($multi? "multiple = 'multiple'":"")."> <option disabled>Escolha uma opção</option>";
        while ($row = mysqli_fetch_array($resultado)) {
            $aux='';
            if ($codigos == $row[$codigo]) {
                $aux='selected';
            }
           
            echo "<option class='get_$tabela' value='".$row[$codigo]."' $aux >".$row[$exibir]."</option>";
        }
        echo "</select>";
    }
