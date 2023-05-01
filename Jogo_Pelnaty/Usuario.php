<?php

class Usuario {

  private $nome;
  private $cantoSelecionado;
  private $nivel;

  function __construct($nome){
    $this->nome = $nome;
    $this->$cantoSelecionado = 1;
    $this->$nivel = 1;
  }

  public function getNome() {
        return $this->nome;
    }
  public function setNome($nome) {
        $this->nome = $nome;
    }
  public function getCantoSelecionado() {
        return $this->cantoSelecionado;
    }
  public function setCantoSelecionado($canto) {
        $this->cantoSelecionado = $canto;
    }
  public function getNivel() {
        return $this->nivel;
    }
  public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
  
}