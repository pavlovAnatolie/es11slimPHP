<?php

class Classe{
    protected $numero;
    protected $sezione;
    protected $al;

    function __construct($numero, $sezione,$al){
        $this->numero = $numero;
        $this->sezione = $sezione;
        $this->al = $al;
    }

    function addal($alunno){
        /*$this->al(count($al))=$alunno;*/
    }

    function getNumero(){
        return $this->numero;
    }

    function getSezione(){
        return $this->sezione;
    }


    function setNumero($numero){
        $this->numero = $numero;
    }

    function setSezione($sezione){
        $this->sezione = $sezione;
    }

    function toString(){
        $s = $this->numero ." ".$this->sezione;
        foreach ($this->al as $value) {
            $s = $s ."<br>".$value->toString();
        }
        return $s;
    }

    function find($nome) {  
        foreach ($this->al as $value) {
            if($value->getNome()== $nome){
              return $value->toString();  
            }
            
        }
    }


}