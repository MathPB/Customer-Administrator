<?php

namespace App\Core;

class Controller {

    public function model($model){
        require_once '../App/models/'.$model.'.php';
        return new $model;
    }

    public function view($view = 'template'){
        require_once '../App/views/'.$view.'.php';
    }
}