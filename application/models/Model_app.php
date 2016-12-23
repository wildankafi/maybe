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
	
	function getAll_datatips(){
        $this->db->order_by('id_tips');
        $query=$this->db->get('data_tips');
        return $query->result();
    }

    function getAll_datagejala(){
        $this->db->order_by('id_gejala');
        $query = $this->db->get('data_gejala');
        return $query->result();
    }

  

    function savedatatips($uploadInfo){
        $data = array(
            'judul_tips'=> $this->input->post('judul_tips'),
            'deskripsi_tips'=> $this->input->post('deskripsi_tips'),
            'jenis_tips'=> $this->input->post('jenis'),
            'tgl'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),
            'gambar' => $uploadInfo['file_name']);
        $this->db->insert('data_tips',$data);
    }

    function savedatagejala($uploadInfo){
        $data = array(
            'nama_gejala'=> $this->input->post('nama_gejala'),
            'judul_artikel'=> $this->input->post('judul_artikel'),
            'deskripsi_gejala'=> $this->input->post('deskripsi_gejala'),
            'gambar' => $uploadInfo['file_name']);
        $this->db->insert('data_gejala',$data);
    }

   

    function save_update_gejala($id_gejala){
        $data = array('nama_gejala'=> $this->input->post('nama_gejala'),'judul_artikel'=> $this->input->post('judul_artikel'),'deskripsi_gejala'=> $this->input->post('deskripsi_gejala'));
        $this->db->where('id_gejala', $id_gejala);
        $this->db->update('data_gejala', $data);
    }

    function save_update_tips($id_tips){
        $data = array('judul_tips'=> $this->input->post('judul_tips'),'deskripsi_tips'=> $this->input->post('deskripsi_tips'),
            'tgl'=> $this->input->post('Tgl')."/".$this->input->post('Bln')."/".$this->input->post('Thn'),'jenis_tips'=> $this->input->post('jenis'));
        $this->db->where('id_tips', $id_tips);
        $this->db->update('data_tips', $data);
    }

    

    function cek_database() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('data_admin');
        return $query->result();
    }

    
    function per_id($id)
    {
        $this->db->where('id_tips',$id);
        $query=$this->db->get('data_tips');
        return $query->result();
    }
    function gejala_id($id)
    {
        $this->db->where('id_gejala',$id);
        $query=$this->db->get('data_gejala');
        return $query->result();
    }
}