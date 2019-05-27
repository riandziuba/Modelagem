
<?php
require_once 'conf/conf.inc.php';

$conexao = mysqli_connect($url, $usuario, $password, $dbname);

header('Content-Type: text/html; charset=UTF-8');
  #include('/conf/conf.inc.php');

  if (mysqli_connect_errno()) {
      echo mysqli_connect_errno();
  }
mysqli_set_charset($conexao, 'utf8');
