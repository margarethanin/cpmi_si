<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tanpa Seleksi
 *
 * @author Margarethanin
 */
class Pekerjaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    
    //put your code here
    function form_insert_pekerjaan() {
        $this->load->view('crud/pekerjaan_form_insert');
    }

    function data_pekerjaan() {
        $this->load->view('crud/pekerjaan_data');
    }

    function proses_insert_pekerjaan() {
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'pekerjaan' => $this->input->post('pekerjaan'),
        );
        $this->Pekerjaan_m->insert_pekerjaan($data);
        redirect('Pekerjaan/data_pekerjaan');
    }

//CODING UNTUK HAPUS DATA  
    function hapus_data_pekerjaan($id_pekerjaan) {
        $this->Pekerjaan_m->hapus_pekerjaan($id_pekerjaan);
        redirect('Pekerjaan/data_pekerjaan');
    }

    function form_edit_pekerjaan($id_pekerjaan) {
        $data['data_pekerjaan'] = $this->Pekerjaan_m->select_id_pekerjaan($id_pekerjaan);
        $this->load->view('crud/pekerjaan_form_edit', $data);
    }

//CODING UNTUK EDIT DATA      
    function proses_edit_pekerjaan() {
        $id_pekerjaan = $this->input->post('id_pekerjaan');

        $data = array(
            'pekerjaan' => $this->input->post('pekerjaan'),
        );
        $this->Pekerjaan_m->update_id_pekerjaan($data, $id_pekerjaan);
        redirect('Pekerjaan/data_pekerjaan');
    }

}
