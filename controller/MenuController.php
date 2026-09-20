<?php
class MenuController extends Controller {
    public function index() {

        if(!$this->session->userdata('emailpgn')) {
            $this->load->view('LoginView');
            return;
        }

        $this->load->view('layout/header');
        $this->load->view('layout/content');
        $this->load->view('layout/footer');
    }
}

?>