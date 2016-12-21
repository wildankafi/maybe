<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('text');
        $this->load->model('Model_app');
    }

    

    

    public function index()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datagejala();
        $data['nama_gejala'] = $this->input->post('nama_gejala');
            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['deskripsi_gejala'] = $this->input->post('deskripsi_gejala');
        $this->load->view('displaygejala', $data);
    }
    public function selanjutnya()
    {
        $id=$this->uri->segment(3);
        $data['query']=$this->Model_app->gejala_id($id);
        $this->load->view('displaydetail_gejala',$data);
    }


    function tambah_gejala(){
        $this->load->view('tambah_gejala');
    }


    function insert_datagejala()
    {
        if ($this->input->post('Submit')) {
            $this->Model_app->savedatagejala();
        }
        redirect('gejala/tambah_gejala');
    }

    
    function do_upload(){
        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '1907';
        $config['max_height'] = '1280';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            echo $this->upload->display_errors();
        } else {
            $finfo = $this->upload->data();
            //$this->_createThumbnail($finfo['file_name']);
            $data['uploadInfo'] = $finfo;
            $data['thumbnail_name'] = $finfo['raw_name'] . '_thumb' . $finfo['file_ext'];
            $this->load->model('Model_app');
            $this->Model_app->savedatagejala($finfo);
            $data['query'] = $this->Model_app->getAll_datagejala();
            $data['nama_gejala'] = $this->input->post('nama_gejala');
            $data['judul_artikel'] = $this->input->post('judul_artikel');
            $data['deskripsi_gejala'] = $this->input->post('deskripsi_gejala');

            $this->load->view('tambah_gejala_sukses', $data);
        }
    }

    function tambah_gejala_sukses()
    {
        $this->load->model('Model_app');
        $this->load->view('tambah_gejala_sukses', $data);
    }
  
}