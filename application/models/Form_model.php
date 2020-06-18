<?php

class Form_model extends CI_Model
{
    public function insert()
    {
        $data = array(
            'start' => $this->input->post('start'),
            'end' => $this->input->post('end'),
            'content' => $this->input->post('content'),
            'time' => $this->input->post('time'),
            'date' => $this->input->post('date'),
            'phone' => $this->input->post('phone')
        );

        return $this->db->insert('drives', $data);
    }

}