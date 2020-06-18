<?php

class Find_model extends CI_Model
{
    public function get($id = false)
    {
        if($id == false)
        {
            $query = $this->db->get('drives');
            return $query->result_array();
        }

        $query = $this->db->get_where('drives', array('id' => $id));
        return $query->row_array();
    }

    public function delete($id)
    {
        $single = $this->get($id);

        $query = $this->db->delete('drives', $single);

        return true;
    }
}