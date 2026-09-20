<?php
class MapelController extends Controller {
    public function index() {
        $this->load->view('layout/header');

        $isimapel = $this->load->model('MapelModel');
        $dtmapel['datamapel']= $isimapel->DataMapel();
        $this->load->view('master/mapelView',$dtmapel);

        $this->load->view('layout/footer');
    }

    public function tambahMapel() {
        $this->load->view('layout/header');
        $this->load->view('master/tambahMapelView');
        $this->load->view('layout/footer');
    }

    
    public function tampilMapel(){
        $dtmapel = $this->load->model('MapelModel');
        $hasil = $dtmapel->getDataMapel($_GET['kdmapel']);
        $getMapel['ambilMapel'] = $hasil->fetch_assoc();
        $this->load->view('layout/header');
        $this->load->view('master/ubahMapelView',$getMapel);
        $this->load->view('layout/footer');        
    }

    public function hapusMapel(){
        $dtmapel = $this->load->model('MapelModel');
        $dtmapel->hapusDataMapel($_GET['kdmapel']);
        redirect('MapelController/index');
    }
    
    public function ubahMapel(){
        $dtmapel = $this->load->model('MapelModel');
        $kdmapel = $_POST['kdmapel'];
        $nmmapel = $_POST['nmmapel'];
        $data=array(
            'kdmapel'=>$kdmapel,
            'nmmapel'=>$nmmapel
        );
        $status = $dtmapel->ubahDataMapel($data);
        if ($status) {
            echo "<script>alert('Berhasil diubah...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal ubah...'); window.location.href='index'; </script>";
        }
    }

        public function simpanMapel(){
        $dtmapel = $this->load->model('MapelModel');
        $kdmapel = $_POST['kdmapel'];
        $nmmapel = $_POST['nmmapel'];
        $data=array(
            'kdmapel'=>$kdmapel,
            'nmmapel'=>$nmmapel
        );
        $status = $dtmapel->simDataMapel($data);
        if ($status) {
            echo "<script>alert('Berhasil disimpan...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal Simpan...'); window.location.href='index'; </script>";
        }
    }
}
if(isset($_GET['method']) && $_GET['method'] === 'ubah'){
    $kdmapel = $_GET['kdmapel'] ?? null;
    redirect('MapelController/tampilMapel?kdmapel='.$kdmapel);
}
if(isset($_GET['method']) && $_GET['method'] === 'hapus'){
    $kdmapel = $_GET['kdmapel'] ?? null;
    redirect('MapelController/hapusMapel?kdmapel='.$kdmapel);
}
?>