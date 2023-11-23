<?php

class Auto{

    private string $Kleur;
    private Int $Zitplaatsen = 4;
    private Int $Passagiers = 0;
    private Int $Snelheid = 0;

    public function nieuwe_passagier (){
        $this->Passagiers ++;
        echo $this->Passagiers;
    }

    public function versnel (Int $speed = 0):Int{
        $this->Snelheid += $speed;
    }

    public function rem(){
        $this->Snelheid -= 50;
        echo $this->Snelheid;
    }

}

class Vrachtwagen extends Auto{
    private Int $laadvermogen;
    private Int $lading;

    public function lading(){

    }


}

$auto = new Auto();

$auto->nieuwe_passagier();
$auto->versnel(30);
$auto->rem();

