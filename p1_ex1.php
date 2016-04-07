<?php
class Carro{
    
    protected $valor;
    
    public function __constructor($valor){
        $this->valor = $valor;
    }
    
    public abstract function desconto()
    
}

class Novo extends Carro{
    public function desconto(){
        $this->valor = $this-> valor * 0.95;
    }
}

class SemiNovo extends Carro{
    public function desconto(){
        $this->valor = $this-> valor * 0.85;
    }
}

class Usado extends Carro{
    public function desconto(){
        $this->valor = $this-> valor * 0.70;
    }
}



?>