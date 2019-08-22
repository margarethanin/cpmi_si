<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Pendaftar
 *
 * @author Margarethanin
 */
class Pendaftar extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    
    //put your code here
    function data_pelamar(){
        $this->load->view('daftar_lowongan/data_pelamar');
    }
    function data_lowongan($id_pelamar){
        $data['id_pelamar'] = $id_pelamar;
        //menampilkan data lowongan
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('daftar_lowongan/data_lowongan', $data);
    }
    function data_pelamar_show($notelp){
        $data['pelamar'] = $this->Pendaftar_m->search_pelamar($notelp);
        $this->load->view('daftar_lowongan/data_pelamar_show', $data);
    }
    
    function proses_insert_pendaftar() {
        $id_pelamar = $this->input->post('id_pelamar');
        $data = array(
//          'nama kolom di dalam database' => 'inputan form user',
            'id_pelamar' => $id_pelamar,
            'id_lowongan' => $this->input->post('id_lowongan'),
            'lokasi_kantor_cabang' => $this->input->post('cabang'),
        );
        $this->Pendaftar_m->insert_pendaftar($data);
        redirect("Pendaftar/data_lowongan/$id_pelamar");
    }
    
    function update_status_pendaftar(){
        $id_pendaftar = $this->input->post('id_pendaftar');
        $data = array(
            'status_penerimaan' => $this->input->post('status_penerimaan')
        );
        $this->Pendaftar_m->update_pendaftar($data, $id_pendaftar);
    }
}