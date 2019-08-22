<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_m
 *
 * @author Margarethanin
 */
class Admin_m extends CI_Model {

    //put your code here
    function insert_admin($data) {
        $this->db->insert('tb_admin', $data);
    }

    function select_admin() {
        $query = $this->db->query("Select*from tb_Admin");
        return $query->result();
    }
//CODING UNTUK HAPUS DATA
    function hapus_admin($id_admin) {
        //delete from tb_admin where id_admin = '$id_admin'
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('tb_admin');
    }
//CODING UNTUK EDIT DATA    
    function select_id_admin($id_admin){
        $query = $this->db->query("SELECT * FROM tb_admin where id_admin='$id_admin'");
        return $query->result();
    }
    
    function update_id_admin($data, $id_admin){
        $this->db->where('id_admin', $id_admin);
        $this->db->update('tb_admin', $data);
    }

}
