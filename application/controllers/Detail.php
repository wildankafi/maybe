<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function index()
    {
        // $data['query']=$this->Model_app->getAll_datatips();
        $this->load->view('displaydetail');
    }

    
   
}