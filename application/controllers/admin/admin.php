<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Admin extends CI_Controller {

    public function index()
    {
        // echo base_url();
        $this->load->view('admin/index');
    }

    public function copy(){
        $this->load->view('admin/copy');
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */