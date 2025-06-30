<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function show_login()
    {
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->load->view('landing_page');
        }
    }
}