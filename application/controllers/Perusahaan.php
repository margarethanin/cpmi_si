<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Perusahaan
 *
 * @author Margarethanin
 */
class Perusahaan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    //put your code here
    function form_insert_perusahaan() {
//        $data['lokasi'] = $this->Lokasi_m->select_lokasi();
        $this->load->view('crud/perusahaan_form_insert');
    }
    function data_perusahaan() {
        $this->load->view('crud/perusahaan_data');
    }
    function proses_insert_perusahaan() {
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
//            'id_lokasi' => $this->input->post('lokasi_perusahaan'),
            'lokasi_perusahaan' => $this->input->post('lokasi_perusahaan'),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
            'profil_perusahaan' => $this->input->post('profil_perusahaan'),
        );
        $this->Perusahaan_m->insert_perusahaan($data);
        redirect('Perusahaan/data_perusahaan');
    }
//CODING UNTUK HAPUS DATA
    function hapus_data_perusahaan($id_perusahaan) {
        $this->Perusahaan_m->hapus_perusahaan($id_perusahaan);
        redirect('Perusahaan/data_perusahaan');
    }
//CODING UNTUK EDIT DATA    
    function form_edit_perusahaan($id_perusahaan) {
        $data['data_perusahaan'] = $this->Perusahaan_m->select_id_perusahaan($id_perusahaan);
//        $data['lokasi'] = $this->Lokasi_m->select_lokasi();
        $this->load->view('crud/perusahaan_form_edit', $data);
    }
    function proses_edit_perusahaan() {
        $id_perusahaan = $this->input->post('id_perusahaan');
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
//            'id_lokasi' => $this->input->post('lokasi_perusahaan'),
            'lokasi_perusahaan' => $this->input->post('lokasi_perusahaan'),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
            'profil_perusahaan' => $this->input->post('profil_perusahaan'),
        );
        $this->Perusahaan_m->update_id_perusahaan($data, $id_perusahaan);
        redirect('Perusahaan/data_perusahaan');
    }
}