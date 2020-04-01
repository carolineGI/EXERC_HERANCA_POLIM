<?php
//NOMES: Caroline e Vinicius K
abstract class Animal{
	public $nome;
	public $idade; 
	public $som;
	abstract function acao();

	public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this ->nome = $nome;
    }
    public function getIdade(){
      return $this->idade;
    }
    public function setIdade($idade){
      $this ->idade = $idade;
    }
    public function getSom(){
      return $this->som;
    }
    public function setSom($som){
      $this ->som = $som;
    }
}

class Cachorro extends Animal{
  public function acao(){
    echo "correr<br>";
  }
	
}

class Cavalo extends Animal{
	public function acao(){
    echo "correr<br>";
  }
}

class Preguica extends Animal{
	public function acao(){
    echo "subir em árvores<br>";
  }
}

?>
