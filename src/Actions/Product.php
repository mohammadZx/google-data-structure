<?php

class Product extends StructureAbstract implements ActionInterface, ExtendableInteface{
    public $data;
    public $extentions;
    public function __construct(array $data, array $extentions){
        $this->data = $data;
        $this->extentions = $extentions;
        $this->applyExtentions();
    }

    public function applyExtentions(){

    }

    public function callBack(){
        return $this->data;
    }
}