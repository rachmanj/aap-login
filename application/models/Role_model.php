<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function editRole()
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', ['role' => $this->input->post('role')]);
    }
}
