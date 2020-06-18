<?php

if(!defined('BASEPATH'))
{
    die();
}

class Find extends CI_Controller
{
    public function index()
    {
        $data['drives'] = $this->Find_model->get();

        $this->load->view('templates/header');
        $this->load->view('pages/find', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $data['info'] = $this->Find_model->get($id);

        if(empty($data['info']))
        {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('pages/single', $data);
        $this->load->view('templates/footer');
    }

    public function remove($id)
    {
        $this->Find_model->delete($id);

        $this->index();
    }
}