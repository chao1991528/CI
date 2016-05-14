<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Home extends CI_Controller {

    public function index()
    {
        // echo base_url();
        $this->load->view('index/index');
    }

    public function category(){
        // echo site_url();
        $this->load->view('index/category');
    }

    public function details(){
        $this->load()->view('index/details');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */