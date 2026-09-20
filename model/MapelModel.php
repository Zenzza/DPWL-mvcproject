<?php
class MapelModel extends Database {
    public function DataMapel(){
        $stmt = $this->db->prepare("SELECT * FROM mapel");
        $stmt->execute();
        return $result = $stmt->get_result();
    }

    public function simDataMapel($data){
        $datamapel = $this->db->prepare("INSERT INTO mapel (kdmapel, nmmapel) VALUES (?, ?)");
        $datamapel->bind_param("ss", $data['kdmapel'], $data['nmmapel']);;
        return $datamapel->execute();
    }

    public function getDataMapel($kdmapel) {
        $ambildata = $this->db->prepare("SELECT * FROM mapel WHERE kdmapel = ?");
        $ambildata->bind_param("s",$kdmapel);
        $ambildata->execute();
        return $result = $ambildata->get_result();
    }

    public function ubahDataMapel($data) {
        $datamapel = $this->db->prepare("UPDATE mapel SET nmmapel = ? WHERE kdmapel = ?"
        );
        $datamapel->bind_param("ss", $data['nmmapel'], $data['kdmapel']);
        return $datamapel->execute();
    }

    public function hapusDataMapel($kdmapel) {
        $datamapel = $this->db->prepare("DELETE FROM mapel WHERE kdmapel = ?");
        $datamapel->bind_param("s",$kdmapel);
        return $datamapel->execute();
    }
}