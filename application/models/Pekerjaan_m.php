<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pekerjaan_m
 *
 * @author Margarethanin
 */
class Pekerjaan_m extends CI_Model {

    //put your code here
    function insert_pekerjaan($data) {
        $this->db->insert('tb_pekerjaan', $data);
    }

    function select_pekerjaan() {
        $query = $this->db->query("Select*from tb_Pekerjaan");
        return $query->result();
    }

//CODING UNTUK HAPUS DATA      
    function hapus_pekerjaan($id_pekerjaan) {
        //delete from tb_admin where id_admin = '$id_pekerjaan'
        $this->db->where('id_pekerjaan', $id_pekerjaan);
        $this->db->delete('tb_pekerjaan');
    }

//CODING UNTUK EDIT DATA      
    function select_id_pekerjaan($id_pekerjaan) {
        $query = $this->db->query("SELECT * FROM tb_pekerjaan where id_pekerjaan =' $id_pekerjaan'");
        return $query->result();
    }

    function update_id_pekerjaan($data, $id_pekerjaan) {
        $this->db->where('id_pekerjaan', $id_pekerjaan);
        $this->db->update('tb_pekerjaan', $data);
    }

}
