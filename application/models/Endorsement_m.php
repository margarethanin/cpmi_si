<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Endorsement_m
 *
 * @author Margarethanin
 */
class Endorsement_m extends CI_Model {
    //put your code here
    function insert_endorsement($data) {
        $this->db->insert('tb_endorsement', $data);
    }
    function data_hired($id_lowongan) {
        //menampilkan data dari tb_pendaftar_lowongan yang id_lowongan=$id_lowongan dan status=HIRED
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar=p.id_pelamar "
                . "JOIN tb_berkas_proses bp ON p.id_pelamar=bp.id_pelamar where id_lowongan='$id_lowongan' and status_penerimaan='HIRED'");
        return $query->result();
    }
    // Update pendaftar masuk di data lowongan
    function update_endos($data, $id_lowongan) {
        $this->db->where('id_endorsement', $id_endorsement);
        $this->db->update('tb_endorsement', $data);
    }
    //NOMOR CALLING VISA
    function visa($id_pendaftar) {
        $query = $this->db->query("SELECT * FROM tb_endorsement where id_pendaftar='$id_pendaftar'");
        return $query->row();
    }
    //Insert ke database pengiriman endorsement
    function insert_pengiriman($data) {
        $this->db->insert('tb_pengiriman_endorsement', $data);
    }
    function id_pengiriman($tgl) {
//       urutan pembuatan kodenya => tanggalhariininourut-
        $q = $this->db->query("SELECT MAX(RIGHT(id_pengiriman,4)) AS kd_max FROM tb_pengiriman_endorsement WHERE DATE(tanggal_endorsement)='$tgl'");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $tgl_code = date_format(date_create($tgl), "Ymd");
        return $tgl_code . $kd;
    }
    function update_endorsement($id_pengiriman,$id_lowongan) {
//        $this->db->where('nomor_calling_visa <>', "");
//        $this->db->update('tb_endorsement', $data);
        $this->db->query("update tb_endorsement e JOIN tb_pendaftar_lowongan p
                 ON e.id_pendaftar=p.id_pendaftar set id_pengiriman='$id_pengiriman' where id_lowongan='$id_lowongan'");
    }
    //Tabel Excel Turun Visa
    function data_pengiriman_e($id_pengiriman) {
        $query = $this->db->query("SELECT * FROM tb_endorsement e JOIN tb_pengiriman_endorsement pe ON e.id_pengiriman = pe.id_pengiriman
            JOIN tb_pendaftar_lowongan pl ON e.id_pendaftar = pl.id_pendaftar 
            JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar 
            JOIN tb_lowongan l ON pl.id_lowongan = l.id_lowongan 
            JOIN tb_berkas_proses bp ON p.id_pelamar = bp.id_pelamar 
            JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan where pe.id_pengiriman = '$id_pengiriman'");
        return $query->result();
    }
//    ///---> UNTUK KEBERANGKATAN<-----///
//    function data_keberangkatan_l() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan 
//                JOIN tb_lokasi_perusahaan lp ON pr.id_lokasi = lp.id_lokasi where masa_berlaku >= curdate()");
//        return $query->result();
//    }
    ///---> UNTUK KEBERANGKATAN<-----///
//    function data_keberangkatan_l() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan where masa_berlaku >= curdate()");
//        return $query->result();
//    }
    function data_keberangkatan_l() {
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan where masa_berlaku >= curdate()");
        return $query->result();
    }
    function data_keberangkatan_p($id_lowongan) {
        $query = $this->db->query("SELECT * FROM tb_endorsement e JOIN tb_pendaftar_lowongan pl ON e.id_pendaftar = pl.id_pendaftar
            JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar 
            JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where pl.id_lowongan = '$id_lowongan'");
        return $query->result();
    }
    
    ///-->
    function keberangkatan($id_endorsement) {
        $query = $this->db->query("SELECT * FROM tb_endorsement e
                JOIN tb_pendaftar_lowongan pl ON e.id_pendaftar = pl.id_pendaftar
                JOIN tb_lowongan l ON pl.id_lowongan = l.id_lowongan where id_endorsement='$id_endorsement'");
        return $query->row();
    }
    function update_keberangkatan($data, $id_endorsement){
        $this->db->where('id_endorsement', $id_endorsement);
        $this->db->update('tb_endorsement', $data);
    }
    
    //__-->TAMPILAN AWAL DATA PENGIRIMAN
    function pengiriman(){
        $query= $this->db->query("SELECT * FROM tb_pengiriman_endorsement");
        return $query->result();
    }
    
    //Tabel Excel Pengiriman
    function pengiriman_e_check($id_endorsement) {
        $query = $this->db->query("SELECT * FROM tb_endorsement e JOIN tb_pengiriman_endorsement pe ON e.id_pengiriman = pe.id_pengiriman
            JOIN tb_pendaftar_lowongan pl ON e.id_pendaftar = pl.id_pendaftar 
            JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar 
            JOIN tb_lowongan l ON pl.id_lowongan = l.id_lowongan 
            JOIN tb_berkas_proses bp ON p.id_pelamar = bp.id_pelamar 
            JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan where e.id_endorsement = '$id_endorsement'");
        return $query->row();
    }
    
    function excel_hired($id_pendaftar) {
        //menampilkan data dari tb_pendaftar_lowongan yang id_lowongan=$id_lowongan dan status=HIRED
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar=p.id_pelamar
                 JOIN tb_berkas_proses bp ON p.id_pelamar=bp.id_pelamar where pl.id_pendaftar='$id_pendaftar' and status_penerimaan='HIRED'");
        return $query->row();
    }
    
    
    
    //CODING UNTUK HAPUS DATA      
    function hapus_pengiriman($id_pengiriman) {
        //delete from tb_admin where id_admin = '$id_pekerjaan'
        $this->db->where('id_pengiriman', $id_pengiriman);
        $this->db->delete('tb_pengiriman_endorsement');
    }
//    function detail_data_pelamar($id_lowongan) {
//        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar = p.id_pelamar
//                        JOIN tb_berkas_proses bp ON bp.id_pelamar = p.id_pelamar where id_lowongan='$id_lowongan'");
//        return $query->result();
//    }
    
}