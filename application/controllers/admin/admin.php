<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 后台首页控制器
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

    public function change_pwd(){
        if('修改' == $this->input->post('send')){
            $password = $this->input->post('password');
            $repeatpassword = $this->input->post('repeatpassword');
            if($repeatpassword != $password){
                error('2次密码不一致');
            }
            $userinfo = array(
                'password' => md5($password)
            );
            $this->load->model('user_model');
            if($this->user_model->update_user($userinfo, $this->session->userdata('user_id'))){
                success('admin/admin/copy', '密码修改成功');
            }
        }
        $this->load->view('admin/change_pwd');
    }

    public function logout(){
        $this->session->sess_destroy();
        success('admin/login/index','清除成功');
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */