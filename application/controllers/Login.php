<?php

class Login extends CI_Controller
{
    public function home($data = false)
    {
        $this->load->view('templates/header');
        $this->load->view('pages/login', $data);
        $this->load->view('templates/footer');
    }

    public function loginAdmin()
    {
        $this->form_validation->set_message('required', 'Pole {field} jest wymagane.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE)
        {
            if(isset($this->session->userdata['logged_in']))
            {
                $this->load->view('templates/header');
                $this->load->view('pages/panel');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->home();
            }
        }
        else
        {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            $result = $this->Login_model->login($data);

            if($result)
            {
                $email = $this->input->post('email');
                $result = $this->Login_model->user_info($email);

                if($result)
                {
                    $session_data = array(
                        'email' => $result[0]->email
                    );
    
                    $this->session->set_userdata('logged_in', $session_data);
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/panel');
                    $this->load->view('templates/footer');
                }
                else
                {
                    $data = array(
                        'error' => 'Nieprawidłowy email lub hasło'
                    );
                    echo 'Jakiś błąd';
                }

            }
            else
            {
                $data['error'] = 'Podany email lub hasło jest nieprawidłowe';
                $this->home($data);
            }
        }
    }

    public function logout()
    {
        $session_data = array(
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $session_data);
        
        redirect('login');
    }
}