<?php
class GuruModel extends Database {
    public function DataGuru(){
        $stmt = $this->db->prepare("SELECT * FROM guru");
        $stmt->execute();
        return $result = $stmt->get_result();
    }
    public function simDataGuru($data){
        $dataguru = $this->db->prepare("INSERT INTO guru (nip, nmguru, tmptlahir, tgllahir, jenkel, pendidikanakhir, jurusan) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $dataguru->bind_param("sssssss", $data['nip'], $data['nmguru'], $data['tmptlahir'], $data['tgllahir'], $data['jenkel'], $data['pendidikanakhir'], $data['jurusan']);;
        return $dataguru->execute();
    }

    public function getDataGuru($nipGuru) {
        $ambildata = $this->db->prepare("SELECT * FROM guru WHERE nip = ?");
        $ambildata->bind_param("s",$nipGuru);
        $ambildata->execute();
        return $result = $ambildata->get_result();
    }

    public function ubahDataGuru($data) {
        $dataguru = $this->db->prepare("UPDATE guru SET nmguru = ?, tmptlahir = ?, tgllahir = ?, jenkel = ?, pendidikanakhir =?, jurusan = ? WHERE nip = ?");
        $dataguru->bind_param("sssssss", $data['nmguru'], $data['tmptlahir'], $data['tgllahir'], $data['jenkel'], $data['pendidikanakhir'], $data['jurusan'], $data['nip']);
        return $dataguru->execute();
    }
    
    public function hapusDataGuru($nipGuru) {
        $dataguru = $this->db->prepare("DELETE FROM guru WHERE nip = ?");
        $dataguru->bind_param("s",$nipGuru);
        return $dataguru->execute();
    }
    
}
