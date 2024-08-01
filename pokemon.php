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

    function __toString()
    {
        $texto = "Nome:" . $this->nome . "\n";
        $texto .= "Tipo: " . $this->tipo . "\n";
        $texto .= "Vida: " . $this->pontosVida . "\n";
        $texto .= "Nivel: " . $this->nivel . "\n";
        $texto .= "Experiência: " . $this->experiencia . "\n\n";

        return $texto;
    }


}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "PsyDuck";
$psyduck->tipo = "Psiquico";
print $psyduck;

$lucario = new Pokemon();   
$psyduck->nome = "Lucario";
$psyduck->tipo = "Lutador";
print $lucario;

for ($i=0; $i < 5; $i++) 
{ 
    $psyduck->batalhar();
    print "\n";
}

print "\n\n";

for ($i=0; $i < 5; $i++) 
{ 
    $psyduck->batalhar();
    print "\n";
}

print $lucario;
print $psyduck;

