<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->input->method() === 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->get_user($username);

            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('user_id', $user->id);
                redirect('dashboard');
            } else {
                $data['error'] = 'Invalid username or password';
                $this->load->view('auth/login', $data);
            }
        } else {
            $this->load->view('auth/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}