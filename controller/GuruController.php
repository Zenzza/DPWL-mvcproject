<?php
class GuruController extends Controller {
    public function index() {
        $this->load->view('layout/header');

        $isiguru = $this->load->model('GuruModel');
        $dtguru['dataguru']= $isiguru->DataGuru();
        $this->load->view('master/guruView',$dtguru);

        $this->load->view('layout/footer');
    }

    public function tambahGuru() {
        $this->load->view('layout/header');
        $this->load->view('master/tambahGuruView');
        $this->load->view('layout/footer');
    }

    public function tampilGuru(){
        $dtguru = $this->load->model('GuruModel');
        $hasil = $dtguru->getDataGuru($_GET['nip']);
        $getGuru['ambilGuru'] = $hasil->fetch_assoc();
        $this->load->view('layout/header');
        $this->load->view('master/ubahGuruView',$getGuru);
        $this->load->view('layout/footer');        
    }

    public function hapusGuru(){
        $dtguru = $this->load->model('GuruModel');
        $dtguru->hapusDataGuru($_GET['nip']);
        redirect('GuruController/index');
    }
    
    public function ubahGuru(){
        $dtguru = $this->load->model('GuruModel');
        $nip = $_POST['nip'];
        $nmguru = $_POST['nmguru'];
        $tmplahir = $_POST['tmptlahir'];
        $tgllahir = $_POST['tgllahir'];
        $jenkel = $_POST['jenkel'];
        $pendidikanakhir = $_POST['pendidikanakhir'];
        $jurusan = $_POST['jurusan'];
        $data=array(
            'nip'=>$nip,
            'nmguru'=>$nmguru,
            'tmptlahir'=>$tmplahir,
            'tgllahir'=>$tgllahir,
            'jenkel'=>$jenkel,
            'pendidikanakhir'=>$pendidikanakhir,
            'jurusan'=>$jurusan
        );
        $status = $dtguru->ubahDataGuru($data);
        if ($status) {
            echo "<script>alert('Berhasil diubah...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal ubah...'); window.location.href='index'; </script>";
        }
    }


    public function simpanGuru(){
        $dtguru = $this->load->model('GuruModel');
        $nip = $_POST['nip'];
        $nmguru = $_POST['nmguru'];
        $tmplahir = $_POST['tmptlahir'];
        $tgllahir = $_POST['tgllahir'];
        $jenkel = $_POST['jenkel'];
        $pendidikanakhir = $_POST['pendidikanakhir'];
        $jurusan = $_POST['jurusan'];
        $data=array(
            'nip'=>$nip,
            'nmguru'=>$nmguru,
            'tmptlahir'=>$tmplahir,
            'tgllahir'=>$tgllahir,
            'jenkel'=>$jenkel,
            'pendidikanakhir'=>$pendidikanakhir,
            'jurusan'=>$jurusan
        );
        $status = $dtguru->simDataGuru($data);
        if ($status) {
            echo "<script>alert('Berhasil disimpan...'); window.location.href='index';</script>";
        } else {
            echo "<script>alert('Gagal Simpan...'); window.location.href='index'; </script>";
        }
    }
}

if(isset($_GET['method']) && $_GET['method'] === 'ubah'){
    $nip = $_GET['nip'] ?? null;
    redirect('GuruController/tampilGuru?nip='.$nip);
}
if(isset($_GET['method']) && $_GET['method'] === 'hapus'){
    $nip = $_GET['nip'] ?? null;
    redirect('GuruController/hapusGuru?nip='.$nip);
}
?>