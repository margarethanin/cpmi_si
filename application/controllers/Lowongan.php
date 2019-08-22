<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Lowongan
 *
 * @author Margarethanin
 */
class Lowongan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }
    
    //put your code here
    function form_insert_lowongan() {
        $data['perusahaan'] = $this->Perusahaan_m->select_perusahaan_lowongan();
//        $data['pekerjaan'] = $this->Pekerjaan_m->select_pekerjaan();
        $this->load->view('lowongan/lowongan_form_insert', $data);
    }
    function proses_insert_lowongan() {
        /*      insert into tb_lowongan
          (id_perusahaan, tanggal_kontrak, permintaan_lowongan, nominal_upah, id_pekerjaan, id_seleksi)
          values
          (?,?,?,?,?,?,?)
          insert into tb_seleksi
          (id_seleksi, tanggal_seleksi, lokasi_seleksi)
          values
          (?,?,?,?,?)
         */
//        if ($this->input->post('jalur_penerimaan') == "S") {
//            $id_seleksi = $this->Lowongan_m->id_seleksi();
//            $data_seleksi = array(
//                'id_seleksi' => $id_seleksi,
//                'tanggal_seleksi' => $this->input->post('tanggal_seleksi'),
//                'lokasi_seleksi' => $this->input->post('lokasi_seleksi'),
//            );
//            $this->Lowongan_m->insert_seleksi($data_seleksi);
//        } else {
//            $id_seleksi = "";
//        }
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            'masa_berlaku' => $this->input->post('masa_berlaku'),
            'id_perusahaan' => $this->input->post('nama_perusahaan'),
            'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
            'permintaan_lowongan' => $this->input->post('permintaan_lowongan'),
            'nominal_upah' => $this->input->post('nominal_upah'),
//            'id_seleksi' => $id_seleksi
            'status_seleksi' => $this->input->post('jalur_penerimaan')
        );
        $this->Lowongan_m->insert_lowongan($data);
        redirect('Lowongan/data_lowongan');
    }
//CODING UNTUK HAPUS DATA
    function hapus_data_lowongan($id_lowongan) {
        $this->Lowongan_m->hapus_lowongan($id_lowongan);
        redirect('Lowongan/data_lowongan');
    }
    function data_lowongan() {
        $data['data_lowongan'] = $this->Lowongan_m->select_lowongan();
        $this->load->view('lowongan/lowongan_data', $data);
    }
    function data_lowongan_noseleksi() {
        $data['data_lowongan'] = $this->Lowongan_m->select_lowongan_no_seleksi();
        $this->load->view('lowongan/lowongan_data', $data);
    }
    //CODING UNTUK EDIT DATA    
    function form_edit_lowongan($id_lowongan) {
        $data['data_lowongan'] = $this->Lowongan_m->select_id_lowongan($id_lowongan);
        $data['perusahaan'] = $this->Perusahaan_m->select_perusahaan();
//        $data['pekerjaan'] = $this->Pekerjaan_m->select_pekerjaan();
        $this->load->view('lowongan/lowongan_form_edit', $data);
    }
    function proses_edit_lowongan() {
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
            'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            'masa_berlaku' => $this->input->post('masa_berlaku'),
            'id_perusahaan' => $this->input->post('nama_perusahaan'),
            'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
            'permintaan_lowongan' => $this->input->post('permintaan_lowongan'),
            'nominal_upah' => $this->input->post('nominal_upah'),
//            'id_seleksi' => $id_seleksi
            'status_seleksi' => $this->input->post('jalur_penerimaan')
        );
        $this->Lowongan_m->update_id_lowongan($data, $id_lowongan);
        redirect('Lowongan/data_lowongan');
    }
    // JADWAL SELEKSI
    function jadwal_seleksi($id_lowongan) {
        $data['jadwal'] = $this->Lowongan_m->jadwal_seleksi_db($id_lowongan);
        $data['id_lowongan'] = $id_lowongan;
        $this->load->view('lowongan/seleksi_data', $data);
    }
    function input_jadwal_seleksi($id_lowongan) {
        $data['id_lowongan'] = $id_lowongan;
        $this->load->view('lowongan/seleksi_form_insert', $data);
    }
    function simpan_jadwal_seleksi() {
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
            "id_seleksi" => $this->Lowongan_m->id_seleksi(),
            "tanggal_seleksi" => $this->input->post('tanggal_seleksi'),
            "lokasi_seleksi" => $this->input->post('lokasi_seleksi'),
            "id_lowongan" => $id_lowongan
        );
        // memanggil query insert
        $this->Lowongan_m->simpan_jadwal_seleksi_db($data);
        redirect("Lowongan/jadwal_seleksi/$id_lowongan");
    }
    //CODING UNTUK HAPUS DATA ((SELEKSI))
    function hapus_data_seleksi($id_seleksi, $id_lowongan) {
        $this->Lowongan_m->hapus_seleksi($id_seleksi);
        redirect("Lowongan/jadwal_seleksi/$id_lowongan");
    }
    ///// MEMASUKKAN DATA PENDAFTAR LOWONGAN
    function pendaftar($id_lowongan) {
        $data['pendaftar'] = $this->Lowongan_m->pendaftar_db($id_lowongan);
        $data['id_lowongan'] = $id_lowongan;
        $this->load->view('lowongan/pendaftar', $data);
    }
//CODING UNTUK HAPUS DATA ((SELEKSI))
    function hapus_data_pendaftar($id_pendaftar, $id_lowongan) {
        $this->Lowongan_m->hapus_pendaftar($id_pendaftar);
        redirect("Lowongan/pendaftar/$id_lowongan");
    }
    ////CETAK EXCEL SELEKSI
    
    function detail_pelamar_e ($id_lowongan) {
        $data['id_lowongan'] = $id_lowongan;
        $data['data'] = $this->Lowongan_m->detail_data_pelamar($id_lowongan);
        $this->load->view('lowongan/detail_pelamar_e', $data);
    }
    
    function detail_pelamar_excel($id_lowongan) {
        $data['data'] = $this->Lowongan_m->detail_data_pelamar($id_lowongan);
        $this->load->view('Lowongan/detail_pelamar_excel', $data);
    }
    
    function detail_data_excel(){
        $data['data'] = $this->input->post('id_pendaftar[]'); //name checkbox
        $this->load->view("lowongan/detail_excel", $data);
    }
    
    //CODING UNTUK HAPUS DATA ((PELAMAR))
    function hapus_pelamar($id_pendaftar, $id_lowongan) {
        $this->Lowongan_m->hapus_pendaftar($id_pendaftar);
        redirect("Lowongan/detail_pelamar_e/$id_lowongan");
    }
    
        
    //--> CETAK DATA PENERIMAAN RINCI
    function detail_hired_excel($id_lowongan) {
        $data['data'] = $this->Lowongan_m->detail_hired_pelamar($id_lowongan);
        $this->load->view('Lowongan/detail_hired_excel', $data);
    }
    function detail_kiv_excel($id_lowongan) {
        $data['data'] = $this->Lowongan_m->detail_kiv_pelamar($id_lowongan);
        $this->load->view('Lowongan/detail_kiv_excel', $data);
    }
    function detail_reject_excel($id_lowongan) {
        $data['data'] = $this->Lowongan_m->detail_reject_pelamar($id_lowongan);
        $this->load->view('Lowongan/detail_reject_excel', $data);
    }
    
}