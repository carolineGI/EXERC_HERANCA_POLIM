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

$a1 = new Cachorro;
$a2 = new Cavalo;
$a3 = new Preguica;

$a1 -> setNome("bidu");
$a1 -> setIdade(5);
$a1 -> setSom("latir");
echo "Nome {$a1->nome}<br>";
echo "Idade {$a1->idade}<br>";
echo "Som {$a1->som}<br>";
$a1 -> acao();

$a2 -> setNome("capitão");
$a2 -> setIdade(10);
$a2 -> setSom("relinchar");
echo "Nome {$a2->nome}<br>";
echo "Idade {$a2->idade}<br>";
echo "Som {$a2->som}<br>";
$a2 -> acao();

$a3 -> setNome("isa");
$a3 -> setIdade(6);
$a3 -> setSom("sla");
echo "Nome {$a3->nome}<br>";
echo "Idade {$a3->idade}<br>";
echo "Som {$a3->som}<br>";
$a3 -> acao();


?>