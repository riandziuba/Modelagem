<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/material-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/materialize.min.css" />
  <link rel="stylesheet" href="css/css.css" />
  <link rel="stylesheet" type="text/css" href="css/setas.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <style>
    a {
      text-decoration: none;
      color: white;
    }
  </style>
  <title>Modelagem</title>
</head>

<body><?php require_once 'cabecalho.php'; require_once "autoload.php"?><br><br>
  <div class="row  container">
    <?php
      $banco = new banco;
      $vetor = $banco->select("Select id from livros");
      for($i=0; $i<count($vetor); $i++){
        $livro = new Livro('','','','','','');
        $livro->GetofDB($vetor[$i][0]);
        echo $livro;
      }
    ?>
  </div>
</body>

</html>