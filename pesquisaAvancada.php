<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <?php require_once 'connect/connect.php'; 
    require_once 'util.php';    
    $secao = isset($_POST['secao'])?$_POST['secao']:'';
    $local = isset($_POST['local'])?$_POST['local']:'';
    $nivel = isset($_POST['nivel'])?$_POST['nivel']:'';
    $ano = isset($_POST['ano'])?$_POST['ano']:'';
    $tipo =isset($_POST['tipo'])?$_POST['tipo']:'';
    $busca = isset($_POST['busca'])?$_POST['busca']:'';?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/material-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="setas.css">
        <link rel="stylesheet" href="css/pesquisaAvancada.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <title>Modelagem</title>
        <script>
            console.log(document.getElementById('filter'));
            function Filter_Hover(){
                if (document.getElementById('filter').style.display == "none") document.getElementById('filter').style.display = "block";
                else document.getElementById('filter').style.display = "none";

            }
        </script>
    </head>

    <body>
        <?php require_once 'cabecalho.php'; ?>
        <main>
            <div class="row ">
                <form action="" class="col s10 offset-s1" method="post">
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input id="pesquisa" name='busca' type="text" class="validate" value="<?php echo $busca ?>">
                            <label for="pesquisa">Pesquisar</label>
                            <div class="col s1">
                            <a onmouseover="getElementById('filter').style.display = 'block'"><i class="material-icons">arrow_drop_down</i></a>


                        </div>
                        </div>
                        
                        <div class="col s12">
                            <div id="filte" class="filter" onmouseout="document.getElementById('filter').style.display = 'none';">
                                <h3>Filtros</h3 >
                                <div class="input-field col s6">
                                <?php geraSelect("tipo", $tipo, "id", "descricao", "tipo", false)?>
                                    <label for="tipo">Tipo de Trabalho</label>
                                </div>
                                <div class="input-field col s6">
                                <?php geraSelect("local", $local, "id", "descricao", "local", false)?>
                                    <label>Local de Publicação</label>
                                </div>
                                <div class="input-field col s6">
                                <?php geraSelect("nivel", $nivel, "id", "descricao", "nivel", false)?>
                                    <label>Nível de Ensino/Etapa</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="ano">
                                        <option value="-1" selected >(nenhum)</option>
                                        <?php   for ($i=2000; $i <= date("Y"); $i++) { 
                                            echo "<option value='$i'";
                                            echo $ano == $i?"selected":"";
                                            echo ">$i</option>";
                                        } ?>
                                    </select>
                                    <label>Ano de Publicação</label>
                                </div>
                                <div class="input-field col s6 offset-s3">
                                <?php geraSelect("secao", $secao, "id", "descricao", "secao", false)?>
                                <label for="secao">Caracterização de Seção</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-field center">
                            <button type="submit" class="btn blue darken-3">Pesquisa</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col s10 offset-s1">


                    <table>
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Autores</th>
                                <th>Orientadores</th>
                                <th>Ano</th>
                                <th>Instituição</th>
                                <th class="center">Resumo</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT o.id, a.id,t.id, t.titulo, a.nome, o.nome, t.ano, t.instituicao, t.resumo, t.link  FROM  trabalho t, autor a, orientador o, autordotrabalho ta, orientadordotrabalho ot where t.id = ta.id_trabalho and a.id = ta.id_autor and t.id = ot.id_trabalho and o.id = ot.id_orientador ";
                        if (isset($_POST['busca']) and $_POST['busca'] != "") {
                            $busca = $_POST['busca'];
                            $sql .= "and (t.titulo like '%{$busca}%' or t.palavraspasse like '%{$busca}%' or a.nome like '%{$busca}%' or o.nome like '%{$busca}%')";
                        } if (isset($_POST['nivel']) and $_POST['nivel'] != -1) {
                            $nivel = $_POST['nivel'];
                            $sql .= "and t.nivel = {$nivel} ";
                        } if (isset($_POST['tipo']) and $_POST['tipo'] != -1) {
                            $tipo = $_POST['tipo'];
                            $sql .= "and t.tipo = {$tipo} ";
                        }if (isset($_POST['local']) and $_POST['local'] != -1) {
                            $local = $_POST['local'];
                            $sql .= "and t.local = {$local} ";
                        }
                        if (isset($_POST['ano']) and $_POST['ano'] != -1) {
                            $ano = $_POST['ano'];
                            $sql .= "and t.ano = $ano";
                        }
                        if (isset($_POST['secao']) and $_POST['secao'] != -1) {
                            $secao = $_POST['secao'];
                            $sql .= "and t.secao = $secao";
                        }
                        $sql .= " group by t.id";
                       
                        $resultado = mysqli_query($conexao, $sql);
                        while ($row = mysqli_fetch_array($resultado)) {
                            echo "<tr><td>", $row[3] . "</td><td>" . $row[4];
                            $sql = "select nome from autor a, trabalho t, autordotrabalho at where a.id <> {$row[1]} and at.id_autor = a.id and at.id_trabalho = {$row[2]} group by a.id";

                            $resultado2 = mysqli_query($conexao, $sql);
                            while ($row2 = mysqli_fetch_array($resultado2)) {
                                echo "<br>" . $row2[0];
                            }
                            echo "</td><td>" . $row[5];
                            if ($row[5] != "") {
                                $sql = "select nome from orientador a, trabalho t, orientadordotrabalho at where a.id <> {$row[0]} and at.id_orientador = a.id and at.id_trabalho = {$row[2]} group by a.id";


                                $resultado2 = mysqli_query($conexao, $sql);
                                while ($row2 = mysqli_fetch_array($resultado2)) {
                                    echo "<br>" . $row2[0];
                                }
                            }
                            echo "</td>";
                            echo "<td>{$row[6]}</td>" . "<td>{$row[7]}</td>";
                            echo "<td class='center'><a class='modal-trigger' href='#info{$row[2]}'><i class='material-icons'>format_align_justify</i></a>
                            <style>
    a.btn{
  margin-top: 30%;
}
.modal {
 max-height:100%;
 overflow:hidden;
}
p{
}

</style>
<div class='modal section' id='info{$row[2]}'>

  <div class='container'>
    <div class='row'>
     <div class='col s12'>
        <br/>
        <h3 class='center'>Resumo</h3>
      </div> 
      <div class='col s10 l10 offset-s1 offset-l1 justify'>
            <textarea disabled class='materialize-textarea'>{$row[8]}</textarea>
                <a href='http://{$row[9]}'>Conteúdo completo</a>
        </div>
        
        
    </div>
  </div>
</div>    
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </main>

    </body>

    <script>
        $(document).ready(function () {
            $('select').formSelect();
            $('.modal').modal();
        });
    </script>

</html>
