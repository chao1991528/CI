<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Admin extends MY_Controller {

    public function index()
    {
        // echo base_url();
        $this->load->view('admin/index');
    }

    public function copy(){
        $this->load->view('admin/copy');
    }

    public function logout(){
        $this->session->sess_destroy();
        success('admin/login/index','清除成功');
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */