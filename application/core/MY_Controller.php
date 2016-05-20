<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 后台基础类控制器
*/
class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $username = $this->session->userdata('username');
        $userid = $this->session->userdata('user_id');
        if(empty($username) || empty($userid)){
            redirect('admin/login/index');
        }
    }
}