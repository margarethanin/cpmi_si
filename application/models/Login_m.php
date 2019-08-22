<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_m
 *
 * @author Margarethanin
 */
class Login_m extends CI_Model{
    //put your code here
    function cek($uname, $pass){
        $query = $this->db->query("SELECT * FROM tb_admin where user_name='$uname' and password='$pass'");
        return $query;
        
    }
}
