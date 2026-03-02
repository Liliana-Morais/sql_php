<?php

class Viagem{

  public $titulo;
  public $imagem;
  public $texto;

  public function __construct($titulo, $imagem, $texto){
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->texto = $texto;
  }

}

?>