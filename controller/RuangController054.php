<?php
class RuangController054 extends Controller {
    public function index() {
        $this->load->view('layout/header');
        $isiruang = $this->load->model('RuangModel054');
        $dtruang['dataruang']= $isiruang->DataRuang();
        $this->load->view('master/daftarView054',$dtruang);
        $this->load->view('layout/footer');
    }

    public function tambahRuang() {
        $this->load->view('layout/header');
        $this->load->view('master/tambahRuangView054');
        $this->load->view('layout/footer');
    }

    public function tampilRuang (){
        $dtruang = $this->load->model('RuangModel054');
        $hasil = $dtruang->getDataRuang($_GET['koderuang054']);
        $getRuang['ambilRuang'] = $hasil->fetch_assoc();
        $this->load->view('layout/header');
        $this->load->view('master/ubahRuangView054',$getRuang);
        $this->load->view('layout/footer');        
    }

    public function hapusRuang(){
        $dtruang = $this->load->model('RuangModel054');
        $dtruang->hapusDataRuang($_GET['koderuang054']);
        redirect('RuangController054/index');
    }
    
    public function ubahRuang(){
        $dtruang = $this->load->model('RuangModel054');
        $koderuang054 = $_POST['koderuang054'];
        $namaruang054 = $_POST['namaruang054'];
        $status054= $_POST['status054'];
        $data=array(
            'koderuang054'=>$koderuang054,
            'namaruang054'=>$namaruang054,
            'status054'=>$status054
        );
        $status = $dtruang->ubahDataRuang($data);
        if ($status) {
            echo "<script>alert('Berhasil diubah...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal ubah...'); window.location.href='index'; </script>";
        }
    }

    public function simpanRuang(){
        $dtruang = $this->load->model('RuangModel054');
        $koderuang054 = $_POST['koderuang054'];
        $namaruang054 = $_POST['namaruang054'];
        $status054= $_POST['status054'];
        $data=array(
            'koderuang054'=>$koderuang054,
            'namaruang054'=>$namaruang054,
            'status054'=>$status054
        );
        $status = $dtruang->simDataRuang($data);
        if ($status) {
            echo "<script>alert('Berhasil disimpan...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal Simpan...'); window.location.href='index'; </script>";
        }
    }
}

if(isset($_GET['method']) && $_GET['method'] === 'ubah'){
    $koderuang054 = $_GET['koderuang054'] ?? null;
    redirect('RuangController054/tampilRuang?koderuang054='.$koderuang054);
}
if(isset($_GET['method']) && $_GET['method'] === 'hapus'){
    $koderuang054 = $_GET['koderuang054'] ?? null;
    redirect('RuangController054/hapusRuang?koderuang054='.$koderuang054);
}
?>