<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('landing_page');
    }

    public function cek()
    {
        $this->load->view('welcome_message');
    }
}
