<?php

class Form extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_message('required', 'Pole {field} jest wymagane.');
        $this->form_validation->set_message('regex_match', 'Pole {field} musi posiadać 9 cyfr.');

        $this->form_validation->set_rules('start', 'Start', 'required',  array('rule2' => 'Błąd. Podane miasto źle'));
        $this->form_validation->set_rules('end', 'End', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{9}$/]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('pages/add');
            $this->load->view('templates/footer');
        }
        else 
        {
            $data['add'] = true;
            
            $this->Form_model->insert();
            
            $this->load->view('templates/header');
            $this->load->view('pages/add', $data);
            $this->load->view('templates/footer');
        }
    }   
}