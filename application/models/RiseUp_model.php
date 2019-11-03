<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiseUp_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function createData()
    {
        $data = array(
            'inputName' => $this->input->post('inputName'),
            'inputUsername' => $this->input->post('inputUsername'),
            'inputEmail' => $this->input->post('inputEmail')
        );
        $this->db->insert('Users', $data);
    }

    function getAllData()
    {
        $query = $this->db->query('SELECT * FROM Users');
        return $query->result();
    }

    function getData($id)
    {
        $query = $this->db->query('SELECT * FROM Users WHERE `id` =' . $id);
        return $query->userData();
    }

    function updateData($id)
    {
        $data = array(
            'inputName' => $this->input->post('inputName'),
            'inputUsername' => $this->input->post('inputUsername'),
            'inputEmail' => $this->input->post('inputEmail')
        );
        $this->db->where('id', $id);
        $this->db->update('Users', $data);
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('Users');
    }
}
