<?php

    $sql = "SELECT * FROM  {$tb_Trabalhos} t, {$tb_Autor} a, {$tb_Orientador} o, {$tb_Autr} at, {$tb_Ortr} ot where t.id = at.id_trabalho and a.id = at.id_autor and t.id = ot.id_trabalho and o.id = ot.id_orientador ";

    if (isset($_POST['busca'])) {
        $busca = isset($_POST['busca']);
        $sql .= "and t.titulo like '%{$busca}%' or t.palavraspasse like '%{$busca}%' or a.nome like '%{$busca}%' or o.nome like '%{$busca}%'";
    } if (isset($_POST['nivel'])) {
      $nivel = isset($_POST['nivel']);
      $sql .= "and t.nivel = {$nivel} ";
    } if (isset($_POST['tipo'])) {
      $tipo = isset($_POST['tipo']);
      $sql .= "and t.tipo = {$tipo} ";
    }if (isset($_POST['secao'])) {
      $secao = isset($_POST['secao']);
      $sql .= "and t.secao = {$secao} ";
    }
    if (isset($_POST['ano'])){
      $ano = date("Y-m-d" strtotime("{$_POST['ano']}-01-01");
      $sql .= "and t.ano = year($ano)";
    }
}
$resultado = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_array($resultado)) {
        echo "<tr><td>", $row[1]."</td><td>".date('d/m/Y', strtotime($row[2]))."</td><td>".$row[3]."</td></tr>";
    }

 ?>
