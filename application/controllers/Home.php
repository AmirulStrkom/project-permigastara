<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('layout/header');
        $this->load->view('permigastara/home');
        $this->load->view('layout/footer');
    }
}
