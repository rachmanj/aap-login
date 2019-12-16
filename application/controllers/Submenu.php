<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Submenu_model', 'submenu');
    }

    public function index()
    {
        $data['title'] = 'Sub Menu Management';
        $data['subtitle'] = 'Sub Menu List';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['submenu'] = $this->submenu->getSubMenu();

        $this->form_validation->set_rules('title', 'sub menu title', 'required');
        $this->form_validation->set_rules('menu_id', 'Parent menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title'         => $this->input->post('title'),
                'menu_id'       => $this->input->post('menu_id'),
                'url'           => $this->input->post('url'),
                'icon'          => $this->input->post('icon'),
                'is_active'     => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="btn btn-success btn-sm btn-block" role="alert">New sub menu added.</div>');
            redirect('submenu');
        }
    }

    public function delete($id)
    {
        $this->submenu->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub menu deleted.</div>');
        redirect('submenu');
    }

    public function edit($id)
    {
        $data['title'] = 'Submenu Management';
        $data['subtitle'] = 'Edit Submenu';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['submenu'] = $this->submenu->getSubMenuById($id)->row_array();

        $this->form_validation->set_rules('title', 'sub menu title', 'required');
        $this->form_validation->set_rules('menu_id', 'Parent menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title'         => $this->input->post('title'),
                'menu_id'       => $this->input->post('menu_id'),
                'url'           => $this->input->post('url'),
                'icon'          => $this->input->post('icon'),
                'is_active'     => $this->input->post('is_active')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="btn btn-success btn-sm btn-block" role="alert">Submenu changed.</div>');
            redirect('submenu');
        }
    }
}
