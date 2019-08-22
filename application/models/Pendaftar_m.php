<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Pendaftar_m
 *
 * @author Margarethanin
 */
class Pendaftar_m extends CI_Model {
    //put your code here
    function insert_pendaftar($data) {
        $this->db->insert('tb_pendaftar_lowongan', $data);
    }
    // <------------------------menampilkan data tb_pelamar berdasarkan nomor telfon yang di input
    function search_pelamar($notelp) {
//        $query = $this->db->query("SELECT * FROM tb_pelamar where nama_pelamar='$notelp'");
        $query = $this->db->query("SELECT * FROM tb_pelamar where nama_pelamar like '%$notelp%'");
        return $query->result();
    }
//    //masa berlaku lowongan dan menampilkan data dari database lain
//    function data_lowongan() {
//        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan
//                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan where masa_berlaku >= curdate()");
//        return $query->result();
//    }
    //masa berlaku lowongan dan menampilkan data dari database lain
    function data_lowongan() {
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan pr ON l.id_perusahaan = pr.id_perusahaan where masa_berlaku >= curdate()");
        return $query->result();
    }
    // Update pendaftar masuk di data lowongan
    function update_pendaftar($data, $id_pendaftar) {
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->update('tb_pendaftar_lowongan', $data);
    }
}