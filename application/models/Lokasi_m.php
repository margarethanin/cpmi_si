<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lokasi_m
 *
 * @author Margarethanin
 */
class Lokasi_m extends CI_Model{
    //put your code here
    function insert_lokasi($data){
        $this->db->insert('tb_lokasi_perusahaan',$data);
    }
    function select_lokasi(){
        $query = $this->db->query("Select * From tb_lokasi_perusahaan");
        return $query->result();
    }
//CODING UNTUK HAPUS DATA  
    function hapus_lokasi($id_lokasi){
        //delete from tb_admin where id_admin = '$id_pekerjaan'
        $this->db->where('id_lokasi',$id_lokasi);
        $this->db->delete('tb_lokasi_perusahaan');
    }
    
//CODING UNTUK EDIT DATA  
    function select_id_lokasi($id_lokasi){
        $query = $this->db->query("SELECT * FROM tb_lokasi_perusahaan where id_lokasi = '$id_lokasi'");
        return $query->result();
    }
    
    function update_id_lokasi($data, $id_lokasi){
        $this->db->where('id_lokasi',$id_lokasi);
        $this->db->update('tb_lokasi_perusahaan',$data);
    }
}
