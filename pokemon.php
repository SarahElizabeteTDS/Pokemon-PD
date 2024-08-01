<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }

    //Métodos: ações
    function batalhar() {
        $this->aumentarExperiencia(5);        
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 20)
            $this->aumentarNivel();
    }

    function imprimirDados()
    {
        print"\n\nO Pokémon escolhido é o " . $this ->nome . "\nSeu tipo é: " . $this ->tipos . "Possui: " . $this ->pontosVida . " de vida\n" . $this ->experiencia . " de XP\n" . "Level atual: " . $this ->nivel . "\n\n";
    }


}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->imprimirDados();

$lucario = new Pokemon();   
$lucario->imprimirDados();

for ($i=0; $i < 5; $i++) 
{ 
    $psyduck->batalhar();
    print_r($psyduck);
    print "\n";
}

print "\n\n";

for ($i=0; $i < 5; $i++) 
{ 
    $psyduck->batalhar();
    print_r($psyduck);
    print "\n";
}


