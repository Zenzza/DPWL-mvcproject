<?php
class GradeModel{
    public function getGrade($nilai){
        if($nilai >=90 && $nilai <= 100){
            return ['grade'=>'A','nilai'=>$nilai,'hasil'=>'Lulus Sangat Baik'];
        } elseif ($nilai >=80) {
            return ['grade'=>'B','nilai'=>$nilai,'hasil'=>'Lulus Baik'];
        } elseif ($nilai >=70) {
            return ['grade'=>'C','nilai'=>$nilai,'hasil'=>'Lulus Cukup Baik'];
        } elseif ($nilai >=60) {
            return ['grade'=>'D','nilai'=>$nilai,'hasil'=>'Tidak Lulus Buruk'];
        } else {
            return ['grade'=>'E','nilai'=>$nilai,'hasil'=>'Tidak Lulus Sangat Buruk'];
        }
    }
}
?>