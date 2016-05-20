<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 登录控制器
*/
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->load->library('form_validation');
        if($this->input->post('send') == 'login'){
            if($this->form_validation->run('login')){
                if(!isset($_SESSION)){
                    session_start();
                }
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $yzm = $this->input->post('yzm');
                if(strtoupper($yzm) != $_SESSION['code']){
                    error('验证码错误！');
                }
                if($this->user_model->login_check($username, $password)){
                    success('admin/admin/index', '登录成功');
                }else{
                    error('用户名或密码错误');
                }
            }
                
        }
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