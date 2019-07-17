<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CREMME - Cadastro</title>
        <?php require_once 'head.html'; ?>
    </head>
    <body>
        <?php require_once 'cabecalho.php'; require_once 'util.php';?>
        <main>
            <h3 class="center-align">Cadastro</h3>
            <div class="col s12">
                <form method="post" action="" id="formu">
                    <input type="hidden" value="trabalho" name="tabela" id="tabela">
                    <input type="hidden" value="inserir" name="acao" id="acao">
                    <div class="row">
                        <div class="input-field col s2 offset-s1">
                            <input type="text" name="titulo" id="titulo">
                            <label for="titulo">Título</label>
                        </div>
                        <div class="input-field col s2">
                            <input type="text" name="instituicao" id="instituicao">
                            <label for="instituicao">Instituição</label>
                        </div>
                        <div class="input-field col s2">
                            <?php geraSelect("tipo", '', "id", "descricao", "tipo", false)?>
                            <label for="tipo">Tipo de Trabalho</label>
                        </div>
                        <div class="input-field col s2">
                        <?php geraSelect("secao", '', "id", "descricao", "secao", false)?>
                            <label for="secao">Caracterização de Seção</label>
                        </div>
                        <div class="input-field col s2">
                        <?php geraSelect("nivel", '', "id", "descricao", "nivel", false)?>
                            <label for="nivel">Nível de Ensino/Etapa</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2 offset-s1">
                            <input type="number" min="1900" max="<?php echo date("Y"); ?>" name="ano" id="ano">
                            <label for="ano">Ano</label>
                        </div>
                        <div class="input-field col s4">
                            <textarea id="palavra" name="palavra" class="materialize-textarea">Palavra Chave 1, Palavra Chave 2</textarea>
                            <label for="palavra">Palavra Chave</label>
                        </div>
                        <div class="input-field col s2">
                            <?php geraSelect("autor", '', "id", "nome", "autor[]", true) ?>
                        </div>
                        <div class="input-field col s2">
                            <?php geraSelect("orientador", '', "id", "nome", "orientador[]", true) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 offset-s1">
                            <textarea id="link" name="link" class="materialize-textarea" data></textarea>
                            <label for="link">Link</label>
                        </div>
                        <div class="input-field col s2">
                            <?php geraSelect("`local`", '', "id", "descricao", "local", false) ?>
                            <label for="local">Local de Publicação</label>
                        </div>
                         <div class="input-field  col s5">
                            <textarea id="resumo" name="resumo" class="materialize-textarea" data></textarea>
                            <label for="resumo">Resumo</label>
                        </div>
                       
                    </div>
                    <div class="center">
                    <button type="button" onclick="insertData()" class="btn">Cadastrar</button>
                </div>
                </form>
               
            </div>
        </main>
    </body>
    <?php require_once 'javas.html'; ?>
    <script src="js/func.js"></script>
    <script>
        $(document).ready(function () {
        $('select').formSelect();
        
        });
    </script>
</html>
