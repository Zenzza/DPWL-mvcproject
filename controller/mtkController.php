<?php
// include_once './model/mtkModel.php';

class mtkController {
    public function index(){
        $model = new mtkModel();
        $datamtk = $model-> getAllMtk();
        include './view/mtkView.php';
    }
}