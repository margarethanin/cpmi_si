<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Margarethanin
 */
class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if ($this->session->has_userdata('id_admin_ptsmu')){
            redirect('Welcome');
        }
    }


    //put your code here
    function index(){
        $this->load->view('login');
    }
    function proses_login(){
        $uname = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $row = $this->Login_m->cek($uname, $pass);
        if ($row->num_rows() > 0) {
            foreach ($row->result() as $r)  {
                $sessionData = array(
                    'id_admin_ptsmu' => $r->id_admin,
                    'uname_admin_ptsmu' => $r->user_name,
                    'nama_admin_ptsmu' => $r->nama_admin,
                    'level_admin_ptsmu' => $r->level,
                );
                $this->session->set_userData($sessionData);
            }          
            echo 1;
        } else {
            echo 0;
        }
    }
}
