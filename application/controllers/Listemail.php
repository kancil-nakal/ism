<?php
defined('BASEPATH') or exit('No direct script access allowed');

class listemail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'List Email';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get('users')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profile/emaillist', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'New List Email';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|is_unique');
        $this->form_validation->set_rules('telp', 'Telp', 'required|is_unique');
        $this->form_validation->set_rules('email1', 'Email', 'is_unique|valid_email');
        $this->form_validation->set_rules('email2', 'Email', 'is_unique|valid_email');
        $this->form_validation->set_rules('email3', 'Email', 'is_unique|valid_email');
        $this->form_validation->set_rules('email4', 'Email', 'is_unique|valid_email');
        $this->form_validation->set_rules('email5', 'Email', 'is_unique|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('profile/addemail', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'name' => $this->input->post('name'),
                'nik' => $this->input->post('nik'),
                'telp' => $this->input->post('telp'),
                'email1' => $this->input->post('email1'),
                'email2' => $this->input->post('email2'),
                'email3' => $this->input->post('email3'),
                'email4' => $this->input->post('email4'),
                'email5' => $this->input->post('email5'),
                'address' => $this->input->post('address'),
                'dept' => $this->input->post('dept'),
                'position' => $this->input->post('position'),
                'site' => $this->input->post('site'),
                'region' => $this->input->post('region'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('users', $data);

            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success alert-dismissible fade show" role="alert">
                New product added!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
            redirect('listemail');
        }
    }

    public function profile($id)
    {
        $data['title'] = 'Profile';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get_where('users', ['user_id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profile/userprofile', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['title'] = 'Update Profile';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get_where('users', ['user_id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profile/updateprofile', $data);
        $this->load->view('templates/footer');
    }
}
