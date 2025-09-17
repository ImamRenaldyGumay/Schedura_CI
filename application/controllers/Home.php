<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load models, helpers, libraries if needed
    }

    public function index() {
        $this->load->view('Home_view');
    }

    public function about() {
        $this->load->view('About_view');
    }
}