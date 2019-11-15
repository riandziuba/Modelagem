<?php require_once 'autoload.php';

class Livro {
    private $codigo;
    private $titulo;
    private $autor;
    private $sobre;
    private $link;
    private $foto;

    function Livro($codigo, $titulo, $autor, $sobre, $link, $foto){
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->sobre = $sobre;
        $this->link = $link;
        $this->foto = $foto; 
    }

    public function getCodigo() {
        return  $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo=$codigo;
    }


    public function getTitulo() {
        return  $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo=$titulo;
    }


    public function getAutor() {
        return  $this->autor;
    }

    public function setAutor($autor) {
        $this->autor=$autor;
    }


    public function getSobre() {
        return  $this->sobre;
    }

    public function setSobre($sobre) {
        $this->sobre=$sobre;
    }


    public function getLink() {
        return  $this->link;
    }

    public function setLink($link) {
        $this->link=$link;
    }


    public function getFoto() {
        return  $this->foto;
    }

    public function setFoto($foto) {
        $this->foto=$foto;
    }

    public function GetofDB($id){
        $banco = new banco;
        $vetor = $banco->select("Select * from livros where id = $id");
        $this->setCodigo($vetor[0][0]);
        $this->setTitulo($vetor[0][1]);
        $this->setAutor($vetor[0][2]);
        $this->setSobre($vetor[0][3]);
        $this->setLink($vetor[0][4]);
        $this->setFoto($vetor[0][5]);
    }

    public function __toString(){
        return "<div class=' col s12' style='text-align:justify;'>
        <div class='col s3 '>
          <img src='{$this->getFoto()}' width='200'>
        </div>
        <div class='col s8'>
          <p><b>Titulo:</b> {$this->getTitulo()}</p>
          <p><b>Autor:</b> {$this->getAutor()}</p>
          <p>{$this->getSobre()}</p>
          <button type=' button' class='btn blue darken-3'><a target='_blank'
              href='{$this->getLink()}'>+Mais
              Informações</a></button>
        </div>
      </div>";
    }


}

?>