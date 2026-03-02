<?php

class Banner{

  public $titulo;
  public $imagem;
  public $legenda;

  public function __construct($titulo, $imagem, $legenda){
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->legenda = $legenda;
  }

}

?>