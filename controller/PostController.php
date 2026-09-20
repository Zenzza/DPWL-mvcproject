<?php
class PostController extends Controller {
    public function index () {
        $this->load->view('postView');
    }
    public function ambil() {
        $nilai = $_POST['nilai'];
        $nama = $_POST['nama'];
        echo 'Nama Anda : ' . $nama;
        echo '<br> Nilai yang dikirim : ' .$nilai;
    }
}
?>