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
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        );
        $this->db->insert('Users', $data);
    }

    function getAllData()
    {
        $query = $this->db->query('SELECT * FROM Users ORDER BY id ASC');
        return $query->result();
    }

    function getData($id)
    {
        $query = $this->db->query('SELECT * FROM Users WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
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