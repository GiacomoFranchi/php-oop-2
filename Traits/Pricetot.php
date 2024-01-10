<?php

trait Pricetot {

    protected $pricetot;

    public function setPricetot(){
        $_pricetot = $this->price * $this->number;
        if($_pricetot > 0){
            $this->pricetot = $_pricetot;
        } else{
            return 'error il prezzo deve essere positivo';
        }
    }
}