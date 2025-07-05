<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('Auth/Login');
    }

    public function Register()
    {
        $this->load->view('Auth/Register');
    }
}
