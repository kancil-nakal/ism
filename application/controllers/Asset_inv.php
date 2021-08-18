<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset_inv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Asset';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['assets'] = $this->db->get('assets')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('asset_inv/assetlist', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'New Asset';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('asset', 'Asset', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('asset_inv/addasset', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('assets', ['asset' => $this->input->post('asset')]);
            $this->session->set_flashdata('message', '<div style="opacity: .8" class="alert alert-success alert-dismissible fade show" role="alert">
            New brand added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('asset_inv');
        }
    }
}
