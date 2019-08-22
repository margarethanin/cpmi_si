<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endorsement
 *
 * @author Margarethanin
 */
class Endorsement extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    
    //put your code here
    function data_lowongan() {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/data_lowongan', $data);
    }

    function data_cpmi_hired($id_lowongan) {
        $data['id_lowongan'] = $id_lowongan;
        $data['cpmi'] = $this->Endorsement_m->data_hired($id_lowongan);
        $this->load->view('Endorsement/data_cpmi_hired', $data);
    }

    function data_cpmi_hired_excel($id_lowongan) {
        $data['cpmi'] = $this->Endorsement_m->data_hired($id_lowongan);
        $this->load->view('Endorsement/data_cpmi_hired_excel', $data);
    }

    //////////////////MODAL UNTUK POP UP/////////////////
    function proses_insert_visa() {
        $id_pendaftar = $this->input->post('id_pendaftar');
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
//          'nama kolom di dalam database' => 'inputan form user',
            'id_pendaftar' => $id_pendaftar,
            'tanggal_visa' => $this->input->post('tanggal_visa'),
            'nomor_calling_visa' => $this->input->post('visa'),
        );
        $this->Endorsement_m->insert_endorsement($data);
        redirect("Endorsement/data_cpmi_hired/$id_lowongan");
    }

    ////>>>>>>PENGIRIMAN ENDORSEMENT
    function data_pengiriman($id_pengiriman) {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $data['id_pengiriman'] = $id_pengiriman;
        $this->load->view('Endorsement/pengiriman_data', $data);
    }

    //untuk insert pengiriman endorsement
    function proses_insert_pengiriman($id_pengiriman) {
        $tgl = $this->input->post('tanggal_pengiriman');
        $id_pengiriman = $this->Endorsement_m->id_pengiriman($tgl);
        $data = array(
            'id_pengiriman' => $id_pengiriman,
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_endorsement' => $tgl,
            'pengiriman_dokumen' => $this->input->post('ket_pengiriman'),
        );
        $this->Endorsement_m->insert_pengiriman($data);
        redirect("Endorsement/data_pengiriman/$id_pengiriman");
    }

    function pengiriman() {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/pengiriman_form_detail', $data);
    }

    //Tabel Excel Turun Visa
    function simpan_lowongan() {
        $id_lowongan = $this->input->post('id_lowongan[]');
        $id_pengiriman = $this->input->post('id_pengiriman');
        foreach ($id_lowongan as $d) {
            $this->Endorsement_m->update_endorsement($id_pengiriman,$d);
        }
        redirect("Endorsement/data_pengiriman_e/$id_pengiriman");
    }
    function data_pengiriman_e($id_pengiriman){
        $data['id_pengiriman'] = $id_pengiriman;
        $data['data'] = $this->Endorsement_m->data_pengiriman_e($id_pengiriman);
        $this->load->view('endorsement/data_pengiriman_e', $data);
    }
   function data_pengiriman_excel($id_pengiriman) {
        $data['data'] = $this->Endorsement_m->data_pengiriman_e($id_pengiriman);
        $this->load->view('Endorsement/data_pengiriman_excel', $data);
    }
    
    ///---> UNTUK KEBERANGKATAN<-----///
    function data_keberangkatan_lowongan(){
        $data['lowongan'] = $this->Endorsement_m->data_keberangkatan_l();
        $this->load->view('keberangkatan/data_keberangkatan_lowongan', $data);
    }
    function data_keberangkatan_pelamar ($id_lowongan) {
        $data['data'] = $this->Endorsement_m->data_keberangkatan_p($id_lowongan);
        $this->load->view('keberangkatan/data_keberangkatan_pelamar', $data);
    }
    
//    function detail_pelamar_e ($id_lowongan) {
//        $data['id_lowongan'] = $id_lowongan;
//        $data['data'] = $this->Lowongan_m->detail_data_pelamar($id_lowongan);
//        $this->load->view('lowongan/detail_pelamar_e', $data);
//    }
    
    //-> MASUKKAN UNTUK KEBERANGKATAN STATUS & KETERANGAN
    function form_insert_keberangkatan($id_endorsement) {
        $data['data'] = $this->Endorsement_m->keberangkatan($id_endorsement);
        $this->load->view('keberangkatan/konfirmasi_keberangkatan', $data);
    }
    
    function proses_insert_keberangkatan() {
        $id_endorsement = $this->input->post('id_endorsement');
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_keberangkatan' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
        );
        $this->Endorsement_m->update_keberangkatan($data, $id_endorsement);
        redirect("Endorsement/data_keberangkatan_pelamar/$id_lowongan");
    }
    
    //__-->TAMPILAN AWAL DATA PENGIRIMAN
    function tampilan_pengiriman(){
        $this->load->view('Endorsement/pengiriman');
    }
    
    function pengiriman_e_check(){
        $data['id_endors'] = $this->input->post('id_endors[]'); //name checkbox
        $this->load->view("Endorsement/pengiriman_check", $data);
    }
    
    function excel_hired(){
        $data['data'] = $this->input->post('id_daftar[]'); //name checkbox
        $this->load->view("Endorsement/cpmi_hired_excel", $data);
    }


    //CODING UNTUK HAPUS DATA  
    function hapus_data_pengiriman($id_pengiriman){
        $this->Endorsement_m->hapus_pengiriman($id_pengiriman);
        redirect('Endorsement/tampilan_pengiriman');
    }
    
}
