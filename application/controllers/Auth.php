<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'required|trim');
          if ($this->form_validation->run() == false) {
              $data['title'] = "Login";
              $this->load->view('templates/auth_header', $data);
              $this->load->view('auth/login');
              $this->load->view('templates/auth_footer');
          } else {
              $this->_login();
          }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin_user = $this->db->get_where('admin_users', ['email' => $email])->row_array();

        //jika user ada
        if ($admin_user) {
            //jika user active
            if ($admin_user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $admin_user['password'])) {
                    $data = [
                        'email' => $admin_user['email'],
                        'role_id' => $admin_user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($admin_user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                    }
                } else {
                    $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-danger" role="alert">
                    Wrong password!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-danger" role="alert">
                Email has not been activated!
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-danger" role="alert">
            This email is not registered!
            </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin_users.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password min 6 characters!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Registration";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $password = $this->input->post('password1', true);

            $data = [
                'name' => htmlspecialchars($name),
                'email' => htmlspecialchars($email),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('admin_users', $data);
            $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please activate your account
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success" role="alert">
            You have been logged out!
            </div>');
        redirect('auth');
    }
}
