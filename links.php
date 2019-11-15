<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <?php require_once 'head.html'; ?>
    <title>CREMME - Links</title>
    <style>
        a {
            text-decoration: none;
            color: #000000
        }

        .title:hover {
            background: rgb(230, 230, 230) !important;

        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
         require_once 'cabecalho.php';
        ?>
    <main>
        <br>
        <div class="row">
            <div class="col s12">
                <div class="col s4 title">
                    <h4 class="center">Portais para Pesquisa</h4>
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <a target="_blanck" href="http://www.scielo.br/?lng=pt"><img src="img\Links\scielo.png"
                                        alt="" width="80" height="80"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <a target="_blanck" href="https://www.periodicos.capes.gov.br/"><img
                                        src="img\Links\capes.png" alt="" width="80" height="80"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <a target="_blanck" href="https://catalogodeteses.capes.gov.br/catalogo-teses/#!/"><img
                                        src="img\Links\capess.png" alt="" height="50" width="250"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <a target="_blanck" href="http://bdtd.ibict.br/vufind/"><img
                                        src="img\Links\biblioteca.png" alt="" height="80"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <a target="_blanck" href="https://www.researchgate.net/"><img
                                        src="img\Links\research.png" alt="" width="80" height="80"></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col s4 title" style="font-weight:bold;">
                    <h4 class="center">Links</h4>
                    <div class="row">
                        <div class="center">
                            <div class="col s12">
                                <a target="_blanck" href="http://www.cnpq.br/" class="link"><img src="img\Links\cnpq.png" height="50">CNPq</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="center">
                            <div class="col s12">
                            <a target="_blanck" href="http://lattes.cnpq.br/" class="link"><img src="img\Links\lattes.png" height="50">Lattes</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col s4 title" style="font-weight:bold;">
                    <h4 class="center">Grupo de Pesquisa</h4>
                    <div class="col s12" style=""><a target="_blanck" href="https://gemmufpa.wordpress.com/"
                            class="link">GEMM (Grupo de Estudos em Modelagem Matemática no Ensino)</a></p>
                    </div><br><br>
                    <div class="col s2"> <img src="img\Links\grupemmat2.png" width="60"></div>
                    <div class="col s10"><a target="_blanck" href="http://www.uel.br/grupo-pesquisa/grupemat/"
                            class="link">GRUPEMMAT (Grupo de Pesquisa sobre Modelagem Matemática e Educação
                            Matemática)</a>
                    </div><br><br>
                    <br>
                    <div class="col s2"><img src="img\Links\cremm.png" width="60"></div>
                    <div class="col s10"><a class='link' target="_blanck"
                            href="http://www.furb.br/cremm/portugues/cremm.php?secao=Publicacoes&parte=Livros">CREMM</a><br><br>
                    </div>
                    <div class="col s12"><a target="_blanck" class='link'
                            href="http://www.sbembrasil.org.br/sbembrasil/index.php/grupo-de-trabalho/gt/gt-10">GT 10
                            MODELAGEM MATEMÁTICA - SBEM</a></div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php require_once 'javas.html'; ?>

</html>