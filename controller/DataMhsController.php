<?php
class DataMhsController extends Controller {
    public function index() {
        $data['datamhs'] = $this->load->model('DataMhsModel')->getAllMhs();
        $this->load->view('dataMhsView', $data);
    }
}
?>