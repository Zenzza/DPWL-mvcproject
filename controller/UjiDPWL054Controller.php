<?php
class UjiDPWL054Controller extends Controller {
    public function index() {
        $this->load->view('ujiDPWL054View');
    }
    public function proseshasil() {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $kali = $_POST['kali'];
        $dataHasil = $this->load->model('UjiDPWL054Model')->getHasil($alas, $tinggi, $kali);
        $hasil['cekhasil'] = $dataHasil;
        $hasil['alas'] = $alas;
        $hasil['tinggi'] = $tinggi;
        $hasil['kali'] = $kali;
        $this->load->view('tampilujiDPWL054View', $hasil);
    }
}
?>
