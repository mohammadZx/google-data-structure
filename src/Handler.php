<?php

class Handler{
    public $action;
    public function __construct(ActionInterface $action){
        $this->action = $action;
    }

    public function export(){
        return $this;
    }
    public function toScript(){
        return '<script>' . $this->action->callBack() . '</script>';
    }
    public function toArray(){
        return $this->action->callBack();
    }
    public function toJson(){
        return $this->json_encode($this->action->callBack());
    }
}