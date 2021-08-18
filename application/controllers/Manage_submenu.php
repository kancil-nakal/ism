<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_submenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Submenu';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->M_menu->getSubmenu();
        $data['menu'] = $this->db->get('menus')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('manage_submenu/submenulist', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title'     => $this->input->post('title', true),
                'menu_id'   => $this->input->post('menu_id', true),
                'url'       => $this->input->post('url', true),
                'icon'      => $this->input->post('icon', true),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('sub_menus', $data);
            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success alert-dismissible fade show" role="alert">
            New Submenu added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('manage_submenu');
        }
    }
}
