<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function copy(){
        $this->load->view('admin/copy');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */