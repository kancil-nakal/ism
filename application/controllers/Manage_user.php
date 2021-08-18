<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['adminUser'] = $this->M_menu->getRoleUser();
        $data['role'] = $this->db->get('roles')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('manage_user/userlist', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('menus', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success alert-dismissible fade show" role="alert">
            New menu added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('manage_menu');
        }
    }
}
