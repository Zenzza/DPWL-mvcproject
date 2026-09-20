<?php
class JadwalModel extends Database {
    public function DataJadwal(){
        $stmt = $this->db->prepare("SELECT * FROM jadwal,guru WHERE jadwal.nip=guru.nip");
        $stmt->execute();
        return $result = $stmt->get_result();
    }

    public function CetakJadwal($nojad){
        $stmt = $this->db->prepare("SELECT * FROM jadwal,isi,guru,mapel WHERE jadwal.nip=guru.nip and isi.nojadwal=jadwal.nojadwal and isi.kdmapel=mapel.kdmapel and jadwal.nojadwal=?");
        $stmt->bind_param("s", $nojad);
        $stmt->execute();
        return $result = $stmt->get_result();
    }

    public function buatNoJadwal() {
        $nojad = $this->db->prepare("SELECT MAX(nojadwal) as kode FROM jadwal");
        $nojad->execute();
        $hasil = $nojad->get_result();
        $data = $hasil->fetch_assoc();
        $nojadmax = $data['kode'];
        $nojadwalbaru = ($nojadmax) ? intval(substr($nojadmax, 1)) + 1 : 1;
        $noBaru = 'J' . str_pad($nojadwalbaru, 4, '0', STR_PAD_LEFT);
        return $noBaru;
    }

    public function simpanJadwal($data) {
        $stmt = $this->db->prepare("INSERT INTO jadwal (nojadwal, tgljadwal, thajar, smt, nip) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['nojadwal'], $data['tgljadwal'], $data['thajar'], $data['smt'], $data['nip']);
        $stmt->execute();
    }

    public function simpanDetail($data) {
        $stmt = $this->db->prepare("INSERT INTO isi (nojadwal, kdmapel, kelompok, jam, hari) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['no_jadwal'], $data['kdmapel'], $data['kelompok'], $data['jam'], $data['hari']);
        $stmt->execute();
    }
}
