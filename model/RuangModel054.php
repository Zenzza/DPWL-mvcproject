<?php
class RuangModel054 extends Database {
    public function DataRuang(){
        $stmt = $this->db->prepare("SELECT * FROM ruangan");
        $stmt->execute();
        return $result = $stmt->get_result();
    }
    public function simDataRuang($data){
        $dataruang = $this->db->prepare("INSERT INTO ruangan (koderuang054, namaruang054, status054) VALUES (?, ?, ?)");
        $dataruang->bind_param("sss", $data['koderuang054'], $data['namaruang054'], $data['status054']);;
        return $dataruang->execute();
    }

    public function getDataRuang($koderuang054) {
        $ambildata = $this->db->prepare("SELECT * FROM ruangan WHERE koderuang054 = ?");
        $ambildata->bind_param("s",$koderuang054);
        $ambildata->execute();
        return $result = $ambildata->get_result();
    }

    public function ubahDataRuang($data) {
        $dataruang = $this->db->prepare("UPDATE ruangan SET namaruang054 = ?, status054 = ? WHERE koderuang054 = ?");
        $dataruang->bind_param("sss", $data['namaruang054'], $data['status054'], $data['koderuang054']);
        return $dataruang->execute();
    }
    
    public function hapusDataRuang($koderuang054) {
        $dataruang = $this->db->prepare("DELETE FROM ruangan WHERE koderuang054 = ?");
        $dataruang->bind_param("s",$koderuang054);
        return $dataruang->execute();
    }
    
}
