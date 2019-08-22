<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Lowongan_m
 *
 * @author Margarethanin
 */
class Lowongan_m extends CI_Model {
    //put your code here
//Untuk insert data
    function insert_lowongan($data) {
        $this->db->insert('tb_lowongan', $data);
    }
//Untuk insert data ke dalam database seleksi
    function insert_seleksi($data) {
        $this->db->insert('tb_seleksi', $data);
    }
////Untuk insert data ke dalam database
//    function select_lowongan() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan 
//                JOIN tb_lokasi_perusahaan lp ON p.id_lokasi = lp.id_lokasi
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
//        return $query->result();
//    }
    
//    //Untuk insert data ke dalam database
//    function select_lowongan() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
//        return $query->result();
//    }
    
    //Untuk insert data ke dalam database
    function select_lowongan() {
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan");
        return $query->result();
    }
//    function select_lowongan_no_seleksi() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan 
//                JOIN tb_lokasi_perusahaan lp ON p.id_lokasi = lp.id_lokasi
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
//        return $query->result();
//    }
    
//    function select_lowongan_no_seleksi() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
//        return $query->result();
//    }
    
    function select_lowongan_no_seleksi() {
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan");
        return $query->result();
    }
//CODING UNTUK HAPUS DATA
    function hapus_lowongan($id_lowongan) {
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->delete('tb_lowongan');
    }
//CODING untuk colabs antara jalur penerimaan di tb_lowongan dengan id_seleksi
//    jadi kalo mau input di tb_lowongan, udah otomatis ngisi tb_seleksi juga
    function id_seleksi() {
//       urutan pembuatan kodenya => tanggalhariininourut-
        $q = $this->db->query("SELECT MAX(RIGHT(id_seleksi,4)) AS kd_max FROM tb_seleksi WHERE DATE(tanggal_post)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        return date('ymd') . $kd;
    }
//CODING UNTUK EDIT DATA    
    function select_id_lowongan($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_lowongan where id_lowongan='$id_lowongan'");
        return $query->result();
    }
    function update_id_lowongan($data, $id_lowongan) {
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->update('tb_lowongan', $data);
    }
    // JADWAL SELEKSI
    function jadwal_seleksi_db($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_seleksi where id_lowongan='$id_lowongan'");
        return $query->result();
    }
    function simpan_jadwal_seleksi_db($data) {
        $this->db->insert('tb_seleksi', $data);
    }
    //CODING UNTUK HAPUS DATA ((SELEKSI))
    function hapus_seleksi($id_seleksi) {
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_seleksi', $id_seleksi);
        $this->db->delete('tb_seleksi');
    }
    ///// MEMASUKKAN DATA PENDAFTAR LOWONGAN
    function pendaftar_db($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan'");
        return $query->result();
    }
    //CODING UNTUK HAPUS DATA ((SELEKSI))
    function hapus_pendaftar($id_pendaftar) {
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->delete('tb_pendaftar_lowongan');
    }
    
        // CETAK EXCEL SELEKSI
    function detail_data_pelamar($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan'");
        return $query->result();
    }
    
    function detail_data_excel($id_pendaftar) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where pl.id_pendaftar='$id_pendaftar'");
        return $query->row();
    }
    
    //--> CETAK DATA PENERIMAAN RINCI
    function detail_hired_pelamar($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan' and status_penerimaan='HIRED'");
        return $query->result();
    }
    function detail_kiv_pelamar($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan' and status_penerimaan='KIV'");
        return $query->result();
    }
    function detail_reject_pelamar($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan' and status_penerimaan='REJECT'");
        return $query->result();
    }
}