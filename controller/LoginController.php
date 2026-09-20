<?php
class LoginController extends Controller {
    public function index() {
        $this->load->view('loginView');
    }
    public function datalogin() {
        $emailpas = $_POST['emailpgn'];
        $passwordpas = md5($_POST['passpgn']);
        $this->session->set_userdata('emailpgn', $emailpas);
        $dtlog['dtemail']=$this->session->userdata('emailpgn');

        $logmodel = $this->load->model('LoginModel');
        $dtpengguna = $logmodel->cariPengguna($emailpas, $passwordpas);
        if ($dtpengguna) {
            $this->session->set_userdata('namapgn', $dtpengguna['nmlengkap']);
            redirect('MenuController');
        } else {
            $dtlog['cek']=1;
            $this->load->view('loginView', $dtlog);
        }
    }
    public function logout() {
        $this->session->unset_userdata('emailpgn');
        $this->session->unset_userdata('namapgn');
        $this->load->view('loginView');
    }
}
?>