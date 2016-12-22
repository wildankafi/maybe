<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $data['query']=$this->Model_app->getAll_datatips();

    }

    public function index()
    {
        $data['query']=$this->Model_app->getAll_datatips();
        $this->load->view('displaykategori_tips');
    }
    public function selanjutnya()
    {
        $id=$this->uri->segment(3);
        $data['query']=$this->Model_app->per_id($id);
        $this->load->view('displaydetail',$data);
    }

    public function tips_ibu()
    {
        //$this->load->model('Model_app', '', TRUE);
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
        $this->load->view('displaytips_ibu', $data);

    }

    public function tips_bayi()
    {
        $this->load->model('Model_app');
        $data['query'] = $this->Model_app->getAll_datatips();
        $this->load->view('displaytips_bayi', $data);

