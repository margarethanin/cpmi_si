<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berkas
 *
 * @author Margarethanin
 */
class Berkas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('id_admin_ptsmu')){
            redirect('Login');
        }
    }

    //put your code here
    function form_insert_berkas_proses() {
        $this->load->view('berkas/berkas_proses_form_insert');
    }

    function data_berkas_proses() {
        $this->load->view('berkas/berkas_proses_data');
    }

    function form_insert_berkas_dasar() {
        $this->load->view('berkas/berkas_dasar_form_insert');
    }

    function data_berkas_dasar() {
        $this->load->view('berkas/berkas_dasar_data');
    }

    function update_berkas($id_pelamar, $berkas) {
        $data['id_pelamar'] = $id_pelamar;
        $data['berkas'] = $berkas;
        $this->load->view('berkas/update_berkas', $data);
    }

    function update_proses($id_pelamar, $berkas) {
        $data['id_pelamar'] = $id_pelamar;
        $data['berkas'] = $berkas;
        $this->load->view('berkas/update_berkas_proses', $data);
    }

    ////// update_berkas_nomor//////
    function update_nomor($id_pelamar) {
        $data['nomor'] = $this->Berkas_m->select_nomor($id_pelamar);
        $data['id_pelamar'] = $id_pelamar;
        $this->load->view('berkas/update_berkas_nomor', $data);
    }

    function update_berkas_nomor() {
        $id_pelamar = $this->input->post('id_pelamar');

        $data = array(
            'nomor_paspor' => $this->input->post('nomor_paspor'),
            'id_cpmi' => $this->input->post('id_cpmi'),
            'asuransi_pra' => $this->input->post('asuransi_pra'),
            'nomor_ktkln' => $this->input->post('nomor_ktkln'),
            'asuransi_purna' => $this->input->post('asuransi_purna'),
        );
        $this->Berkas_m->update_berkas_proses_db($data, $id_pelamar);
        redirect("Pelamar/detail_pelamar/$id_pelamar");
    }

//    function form_edit_lowongan($id_lowongan) {
//        $data['data_lowongan'] = $this->Lowongan_m->select_id_lowongan($id_lowongan);
//        $data['perusahaan'] = $this->Perusahaan_m->select_perusahaan();
//        $data['pekerjaan'] = $this->Pekerjaan_m->select_pekerjaan();
//        $this->load->view('lowongan/lowongan_form_edit', $data);
//    }
//
//    function proses_edit_lowongan() {
//        $id_lowongan = $this->input->post('id_lowongan');
//
//        $data = array(
//            'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
//            'masa_berlaku' => $this->input->post('masa_berlaku'),
//            'id_perusahaan' => $this->input->post('nama_perusahaan'),
//            'id_pekerjaan' => $this->input->post('pekerjaan'),
//            'permintaan_lowongan' => $this->input->post('permintaan_lowongan'),
//            'nominal_upah' => $this->input->post('nominal_upah'),
////            'id_seleksi' => $id_seleksi
//            'status_seleksi' => $this->input->post('jalur_penerimaan')
//        );
//        $this->Lowongan_m->update_id_lowongan($data, $id_lowongan);
//        redirect('Lowongan/data_lowongan');
//    }
//////////////////////// BERKAS DASAR//////////////////////////////////

    function update_berkas_dasar() {
        $tipe_berkas = $this->input->post('tipe_berkas');
        $id_pelamar = $this->input->post('id_pelamar');

        $config['upload_path'] = "./assets/berkas_pelamar/"; //tempat menyimpan file
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pelamar . '-' . $tipe_berkas;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        //upload
        if ($this->upload->do_upload($tipe_berkas)) {
            $foto = $this->upload->data();

            //update database
            $data = array(
                "$tipe_berkas" => $foto['file_name'],
                "tanggal_masuk_$tipe_berkas" => date("Ymd")
            );
            //query
            $this->Berkas_m->update_berkas_dasar_db($data, $id_pelamar);
            redirect("Pelamar/detail_pelamar/$id_pelamar");
        } else {
//            $error = array('error' => $this->upload->display_errors());
//            echo json_encode($error);
//            //            $error = array('error' => $this->upload->display_errors());
//            echo json_encode($error);
            $data = array(
                "$tipe_berkas" => '',
                "tanggal_masuk_$tipe_berkas" => '0000-00-00'
            );
            //query
            $this->Berkas_m->update_berkas_dasar_db($data, $id_pelamar);
            redirect("Pelamar/detail_pelamar/$id_pelamar");
            // echo $this->upload->display_error();
        }
    }
    
    /////HAPUS BERKAS DASAR
    function hapus_berkas_dasar($id_pelamar) {
        $this->Berkas_m->hapus_dasar($id_pelamar);
        redirect('Pelamar/detail_pelamar');
    }

//////////////////////// BERKAS PROSES//////////////////////////////////

    function update_berkas_proses() {
        $tipe_berkas = $this->input->post('tipe_berkas');
        $id_pelamar = $this->input->post('id_pelamar');

        $config['upload_path'] = "./assets/berkas_pelamar/"; //tempat menyimpan file
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pelamar . '-' . $tipe_berkas;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        //upload
        if ($this->upload->do_upload($tipe_berkas)) {
            $foto = $this->upload->data();

            //update database
            $data = array(
                "$tipe_berkas" => $foto['file_name'],
                "tanggal_pembuatan_$tipe_berkas" => $this->input->post('tanggal_pembuatan'),
                "tanggal_kadaluwarsa_$tipe_berkas" => $this->input->post('tanggal_kadaluwarsa')
            );
            //query
            $this->Berkas_m->update_berkas_proses_db($data, $id_pelamar);
            redirect("Pelamar/detail_pelamar/$id_pelamar");
        } else {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
            // echo $this->upload->display_error();
        }
    }
    
    ////PENGEMBALIAN BERKAS-------------------->/////////
    function pengembalian ($id_pelamar){
        $data['berkas_dasar'] = $this->Berkas_m->berkas_dasar($id_pelamar);
        $this->load->view('pelamar/pengembalian_berkas', $data);
    }
    
    function update_pengembalian() {
        $id_pelamar = $this->input->post('id_pelamar');
        $kilang = $this->input->post('kilang');
        $berkas = $this->input->post('dasar[]');
        foreach ($berkas as $b) {
            $data = array(
                "tanggal_keluar_$b" => date('Y-m-d')
            );
            $this->Berkas_m->update_berkas_dasar_db($data, $id_pelamar);
        }
        redirect("Berkas/bukti_ambil_berkas/$id_pelamar/$kilang");
    }

    //--> BUKTI PENGEMBALIAN BERKAS
    function bukti_ambil_berkas($id_pelamar, $kilang) {
        $data['kilang'] = $kilang;
        $data['data'] = $this->Berkas_m->bukti_ambil($id_pelamar);
        $this->load->view('pelamar/bukti_ambil_berkas', $data);
    }
    
    
}
