<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function deleteMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function editMenuName()
    {
        $data = [
            'menu'  => $this->input->post('menu')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }
}
