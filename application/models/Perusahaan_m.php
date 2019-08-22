<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Perusahaan_m
 *
 * @author Margarethanin
 */
class Perusahaan_m extends CI_Model{
    //put your code here
    function insert_perusahaan($data){
        $this->db->insert('tb_perusahaan',$data);
    }
    
//    function select_perusahaan(){
//        $query = $this->db->query("SELECT* FROM tb_perusahaan p JOIN tb_lokasi_perusahaan lp ON p.id_lokasi = lp.id_lokasi");
//        return $query->result();
//    }
    //untuk masukin ke tb_perusahaan
    function select_perusahaan(){
        $query = $this->db->query("SELECT * FROM tb_perusahaan");
        return $query->result();
    }
    
//untuk masukin ke tb_lowongan
    function select_perusahaan_lowongan(){
        $query = $this->db->query("SELECT * FROM tb_perusahaan");
        return $query->result();
    }
    
//CODING UNTUK HAPUS DATA    
    function hapus_perusahaan($id_perusahaan){
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_perusahaan',$id_perusahaan);
        $this->db->delete('tb_perusahaan');
    }
    
//CODING UNTUK EDIT DATA    
    function select_id_perusahaan($id_perusahaan){
        $query = $this->db->query ("SELECT * FROM tb_perusahaan where id_perusahaan='$id_perusahaan'");
        return $query->result();
    }
    function update_id_perusahaan($data, $id_perusahaan){
        $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->update('tb_perusahaan', $data);
    }
}