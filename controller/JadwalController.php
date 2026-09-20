<?php
class JadwalController extends Controller {
    public function index() {
        $this->load->view('layout/header');
        $isijadwal = $this->load->model('JadwalModel');
        $dtjadwal['ambiljadwal']= $isijadwal->DataJadwal();
        $this->load->view('transaksi/listJadwalView',$dtjadwal);
        $this->load->view('layout/footer');
    }

    public function CetakDataJadwal() {
        $dtjadwal = $this->load->model('JadwalModel');
        $hasil = $dtjadwal->CetakJadwal($_GET['nojadwal']);
        $getjadwal['ambiljadwal'] = $hasil->fetch_all(MYSQLI_ASSOC);
        $this->load->view('transaksi/cetakJadwalView',$getjadwal);
    }

    public function tambahJadwal() {
        $nojadwal = $this->load->model('JadwalModel');
        $dtjadwal['nojadwal'] = $nojadwal->buatNoJadwal();
        $nipGuru = $this->load->model('GuruModel');
        $dtjadwal['dtguru'] = $nipGuru->DataGuru();
        $kdmapel = $this->load->model('MapelModel'); 
        $dtjadwal['mapel'] = $kdmapel->DataMapel();
        $this->load->view('layout/header');
        $this->load->view('transaksi/jadwalView',$dtjadwal);
        $this->load->view('layout/footer');
    }

    public function simpanJadwal() {
        $simjadwal = $this->load->model('JadwalModel');
            $no_jadwal = $_POST['nojadwal'];
            $tgl_jadwal = $_POST['tgljadwal'];
            $thn_ajaran = $_POST['thajar'];
            $semester = $_POST ['semester'];
            $nip = $_POST['nip'];
        $data = [
            'nojadwal' => $no_jadwal,
            'tgljadwal' => $tgl_jadwal,
            'thajar' => $thn_ajaran,
            'smt' => $semester,
            'nip' => $nip
        ];

        $simjadwal->simpanJadwal($data);
            $kdmapel = $_POST['kdmapel'];
            $kelompok = $_POST['kelompok'];
            $jam =  $_POST['jam'];
            $hari = $_POST['hari'];
        for ($i=0; $i < count($kdmapel); $i++) {
            $detail = [
                'no_jadwal' => $no_jadwal,
                'kdmapel' => $kdmapel[$i],
                'kelompok' => $kelompok[$i],
                'jam' => $jam[$i],
                'hari' => $hari[$i]
            ];
            $simjadwal->simpanDetail($detail);   
        }
        echo "<script>alert('Berhasil Disimpan...');window.location.href='index';</script>";
    }
}

if(isset($_GET['method']) && $_GET['method'] === 'cetak'){
    $nojadwal = $_GET['nojadwal'] ?? null;
    redirect('JadwalController/CetakDataJadwal?nojadwal='.$nojadwal);
}
if(isset($_GET['method']) && $_GET['method'] === 'hapus'){
    $nip = $_GET['nip'] ?? null;
    redirect('JadwalController/hapusJadwal?nip='.$nip);
}
?>