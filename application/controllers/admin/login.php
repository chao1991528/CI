<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 登录控制器
*/
class Login extends CI_Controller {

    public function index()
    {
        // $this->load->helper('captcha');
        // $vals = array(
        //     'word' => 'Random word',
        //     'img_path' => './captcha/',
        //     'img_url' => base_url().'captcha/',
        //     'img_width' => '80',
        //     'img_height' => 25,
        //     'expiration' => 10
        // );

        // $data['captcha'] = create_captcha($vals);
        // $this->load->view('admin/login', $data);
        $this->load->view('admin/login');
    }



    public function verify(){
        $config = array(
            'width' =>  80,
            'height'=>  25,
            'fontSize' => 14
        );
        $this->load->library('code', $config);
        $this->code->show();
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */