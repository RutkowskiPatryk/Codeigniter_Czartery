<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function panel()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/panel');
        $this->load->view('templates/footer');
    }

}