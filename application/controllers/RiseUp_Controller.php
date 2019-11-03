<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RiseUp_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RiseUp_model');
    }
    public function index()
    {
        $data['result'] = $this->RiseUp_model->getAllData();
        $this->load->view('index_riseup', $data);
    }
    
    public function create()
    {
        $this->RiseUp_model->createData();
        redirect('RiseUp_Controller');
    }
    public function edit($id)
    {
        $data['userData'] = $this->RiseUp_model->getData($id);
        $this->load->view('riseup_edit', $data);
    }
    public function update($id)
    {
        $this->RiseUp_model->updateData($id);
        redirect('RiseUp_Controller');
    }
    public function delete($id)
    {
        $this->RiseUp_model->deleteData($id);
        redirect('RiseUp_Controller');
    }
}