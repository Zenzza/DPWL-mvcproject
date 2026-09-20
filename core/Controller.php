<?php
class Controller {
    protected $session;
    protected $load;

    public function __construct() {
        $this->session = new Session();
        $this->load = new class {
            public function view($viewName, $data= []){
                if(!empty($data)) extract($data);

                    if(session_status() === PHP_SESSION_NONE){
                        session_start();
                    }
                    if(isset($_SESSION['namapgn'])) {
                        $data['nmadmin'] = $_SESSION['namapgn'];
                    }
                        extract($data);
                        
                        include './view/'. $viewName .'.php';
            }

            public function model($modelName){
                require_once './model/' . $modelName . '.php';
                return new $modelName();
            }
        };
    }
}
