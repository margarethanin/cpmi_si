<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lokasi
 *
 * @author Margarethanin
 */
class Lokasi extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    
    //put your code here
    function form_insert_lokasi() {
        $this->load->view('crud/lokasi_form_insert');
    }

    function data_lokasi() {
        $this->load->view('crud/lokasi_data');
    }

    function proses_insert_lokasi() {
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'lokasi' => $this->input->post('lokasi'),
        );
        $this->Lokasi_m->insert_lokasi($data);
        redirect('Lokasi/data_lokasi');
    }
    
//CODING UNTUK HAPUS DATA  
    function hapus_data_lokasi($id_lokasi){
        $this->Lokasi_m->hapus_lokasi($id_lokasi);
        redirect('Lokasi/data_lokasi');
    }
    
//CODING UNTUK EDIT DATA  
    function form_edit_lokasi($id_lokasi){
        $data['data_lokasi'] = $this->Lokasi_m->select_id_lokasi($id_lokasi);
        $this->load->view('crud/lokasi_form_edit' , $data);
    }
    
        function proses_edit_lokasi(){
        $id_lokasi = $this->input->post('id_lokasi');
        
        $data = array(
        'lokasi' => $this->input->post('lokasi'),
        );
        $this->Lokasi_m->update_id_lokasi($data, $id_lokasi);
        redirect('Lokasi/data_lokasi');
    }

}