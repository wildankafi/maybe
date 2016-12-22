<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         $this->load->helper('text');

    }

    public function pilih_kategori()
    {
        $this->load->view('kategori_update');
    }

    public function list_gejala()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datagejala();
        $this->load->view('displayupdate_gejala', $data);
    }

    public function list_tips()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
        $this->load->view('displayupdate_tips', $data);
    }

   

    public function edit_gejala($id_gejala)
    {
        if ($this->input->post('update')) {
            $data['id_gejala'] = $id_gejala;
            $this->Model_app->save_update_gejala($id_gejala);
            redirect('Update/update_gejala_sukses');
        }else{
            $data['id_gejala'] = $id_gejala;
            $this->load->view('form_update_gejala', $data);
        }
    }
 

    public function edit_tips($id_tips)
    {
        if ($this->input->post('update')) {
            $data['id_tips'] = $id_tips;
            $this->Model_app->save_update_tips($id_tips);
            redirect('Update/update_tips');
        }else{
            $data['id_tips'] = $id_tips;
            $this->load->view('form_update_tips', $data);
        }
    }

    

    public function save_gejala(){
        $id = $this->input->post('id_gejala');
        $nama_gejala = $this->input->post('nama_gejala');
        $judul_artikel = $this->input->post('judul_artikel');
        $deskripsi_gejala = $this->input->post('deskripsi_gejala');

        $this->load->model('Model_app');
        $data['edit'] = $this->Model_app->simpan_update_gejala($id, $nama_gejala, $judul_artikel, $deskripsi_gejala);
        $this->load->view('displayupdate_gejala', $data);

    }
    function update_gejala_sukses()
    {
        $this->load->model('Model_app');
        $this->load->view('form_update_gejala_sukses');
    }
    function update_tips_sukses()
    {
        $this->load->model('Model_app');
        $this->load->view('form_update_tips_sukses');
    }
}