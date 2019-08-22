<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Margarethanin
 */
class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }

    //put your code here
    function form_insert_admin() {
        $this->load->view('crud/admin_form_insert');
    }

    function data_admin() {
//  bisa pake =  $data['data_admin'] = $this->Admin_m->select_admin();
//               $this->load->view('crud/admin_data' , $data);
        
        $this->load->view('crud/admin_data');
    }

    function proses_insert_admin() {
        $data = array(
//          'nama kolom di dalam database' => 'inputan form user',
            'user_name' => $this->input->post('username'),
            'nama_admin' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
        );
        $this->Admin_m->insert_admin($data);
        redirect('Admin/data_admin');
    }
//CODING UNTUK HAPUS DATA
    function hapus_data_admin($id_admin) {
        $this->Admin_m->hapus_admin($id_admin);
        redirect('Admin/data_admin');
    }
//CODING UNTUK EDIT DATA    
    function form_edit_admin($id_admin){
        $data['data_admin'] = $this->Admin_m->select_id_admin($id_admin);
        $this->load->view('crud/admin_form_edit' , $data);
    }
    
    function proses_edit_admin(){
        $id_admin = $this->input->post('id_admin');
        
        $data = array(
        'nama_admin' => $this->input->post('nama'),
        'user_name' => $this->input->post('username'),
        'level' => $this->input->post('level'),
        );
        $this->Admin_m->update_id_admin($data, $id_admin);
        redirect('Admin/data_admin');
    }

}
