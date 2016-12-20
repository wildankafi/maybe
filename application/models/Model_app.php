<?php

class Model_app extends CI_Model{

    function getAll_dataregister(){
        $this->db->order_by('id_event','ASC');
        $query = $this->db->get('register_event');
        return $query->result();
    }

    function getAll_dataadmin(){
        $this->db->order_by('username','ASC');
        $query = $this->db->get('data_admin');
        return $query->result();
    }

   
}