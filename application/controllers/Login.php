<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    function index(){
        $this->load->view('displaylogin');
    }

    function check_auth(){
        $this->load->model('Model_app');
        $data['hasilquery'] = $this->Model_app->cek_database();
        
        if($data['hasilquery'] != null){
            $this->load->library('session');
            
            $username = $data['hasilquery'][0]->username;
            $sessiondata = array('userlogin'=>$username,'login'=>'TRUE');
            $this->session->set_userdata($sessiondata);
            
            
                redirect(admin,$data);
                    }
        else
        {
            $this->session->set_flashdata('message', 'Username / password anda salah! ulangi lagi!');
            $this->load->view('displaylogin',$data);
        }
    }

    function logout(){
        $sessiondata = array('userlogin'=>'','login'=>'FALSE','keterangan'=>'');
        $this->session->unset_userdata($sessiondata);
        redirect('login/index');
    }
}
?>