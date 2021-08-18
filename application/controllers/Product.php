<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Product';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['products'] = $this->M_inventory->getProductAsset();

        // product age


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('product/productlist', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Product';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['products'] = $this->M_inventory->getProductAsset();
        $data['assets'] = $this->db->get('assets')->result_array();
        $data['brands'] = $this->db->get('brands')->result_array();

        $this->form_validation->set_rules('asset_id', 'Asset', 'required');
        $this->form_validation->set_rules('brand_id', 'Brand', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('sn', 'SN', 'required');
        $this->form_validation->set_rules('qrcode', 'Qr Code', 'required');
        $this->form_validation->set_rules('purchase_date', 'Purchase Date', 'required');
        $this->form_validation->set_rules('product_origin', 'Product Origin', 'required');
        $this->form_validation->set_rules('condition', 'Condition', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/addproduct', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'asset_id'          => $this->input->post('asset_id'),
                'brand_id'          => $this->input->post('brand_id'),
                'type'              => $this->input->post('type'),
                'description'       => $this->input->post('description'),
                'sn'                => $this->input->post('sn'),
                'qrcode'            => $this->input->post('qrcode'),
                'purchase_date'     => $this->input->post('purchase_date'),
                'product_origin'    => $this->input->post('product_origin'),
                'cond'              => $this->input->post('condition'),
                'note'              => $this->input->post('note'),
                'is_active'         => $this->input->post('is_active')
            ];

            $this->db->insert('products', $data);

            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success alert-dismissible fade show" role="alert">
            New product added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('product');
        }
    }

    public function log()
    {
        $data['title'] = 'Log Product';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['log_product'] = $this->M_inventory->getLogProduct();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/log_product', $data);
        $this->load->view('templates/footer');
    }

    public function addLogProduct()
    {
        $data['title'] = 'Add Log Product';
        $data['admin_users'] = $this->db->get_where('admin_users', ['email' => $this->session->userdata('email')])->row_array();
        // $data['log_product'] = $this->M_inventory->getLogProduct();
        $data['users'] = $this->db->get('users')->result_array();
        $data['products'] = $this->db->get('products')->result_array();

        $this->form_validation->set_rules('user_id', 'User', 'required|is_unique');
        $this->form_validation->set_rules('product_id', 'product', 'required|is_unique');
        $this->form_validation->set_rules('qrcode', 'QR Code', 'required|is_unique');
        $this->form_validation->set_rules('date', 'Data', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/add_log_product', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'user_id' => $this->input->post('user_id'),
                'product_id' => $this->input->post('product_id'),
                'product_id' => $this->input->post('qrcode'),
                'date' => $this->input->post('date')
            ];

            $this->db->insert('log_product', $data);

            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success alert-dismissible fade show" role="alert">
            New log product added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('log');
        }
    }
}
