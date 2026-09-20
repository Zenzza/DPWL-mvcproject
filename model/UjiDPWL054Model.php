<?php
class UjiDPWL054Model {
    public function getHasil($alas, $tinggi, $kali){
        $hasil = 0.5 * $alas * $tinggi;
        $hasilKali = $hasil * $kali;
        return ['hasil' => $hasil,'hasilKali' => $hasilKali];
    }
}
?>
