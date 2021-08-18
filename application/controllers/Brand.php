<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brand extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Brand';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['brands'] = $this->db->get('brands')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('brand/brandlist', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'New Brand';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('brand', 'Brand', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('brand/addbrand', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('brands', ['brand' => $this->input->post('brand')]);
            $this->session->set_flashdata('message', '<div style="opacity: .8" class="alert alert-success alert-dismissible fade show" role="alert">
            New brand added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('brand');
        }
    }
}
