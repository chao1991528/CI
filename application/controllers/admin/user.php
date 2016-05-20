<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 用户控制器
*/
class User extends CI_Controller {

    public function index()
    {
        // echo base_url();
        $this->load->view('User/index');
    }

    public function copy(){
        $this->load->view('User/copy');
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */