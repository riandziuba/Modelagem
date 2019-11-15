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
                    <input type="hidden" value="autor" name="tabela" id="tabela">
                    <input type="hidden" value="inserir" name="acao" id="acao">
                    <div class="row">
                        
                        <div class="input-field col s2 offset-s4">
                            <input type="text" name="nome" id="nome">
                            <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s2">
                            <select name="tipo">
                                <option value="" disabled selected>Escolha sua opção</option>
                                <option value="1">Autor</option>
                                <option value="2">Co-Autor</option>
                            </select>
                            <label for="tipo">Tipo de Trabalho</label>
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
