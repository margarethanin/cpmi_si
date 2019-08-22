<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logout
 *
 * @author Margarethanin
 */
class Logout extends CI_Controller{
    //put your code here
    function index(){
                $this->session->unset_userData("id_admin_ptsmu");
                $this->session->unset_userData("uname_admin_ptsmu");
                $this->session->unset_userData("nama_admin_ptsmu");
                $this->session->unset_userData("level_admin_ptsmu");
                redirect("Login");
    }
}
