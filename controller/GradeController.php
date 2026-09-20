<?php
class GradeController extends Controller {
    public function index() {
        $nilai = $_GET ['nilai'] ?? 0;
        $grade['cekgrade'] = $this->load->model ('GradeModel')-> getGrade($nilai);
        $this->session->set_userdata('alias','Jordi');
        $grade['nmadmin'] = $this->session->userdata('alias');
        $this->load->view('gradeView', $grade);
    }
}
?>