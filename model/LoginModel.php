<?php
class LoginModel extends Database {
    public function cariPengguna($email, $pass) {
        $stmt = $this->db->prepare("SELECT * FROM pengguna WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}