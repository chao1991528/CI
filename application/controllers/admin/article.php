<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Article extends CI_Controller {

    public function article_add()
    {
        $this->load->helper('form');
        if($this->input->post('send') == '添加'){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', '文章标题', 'required|min_length[5]');
            $this->form_validation->set_rules('type', '文章类型', 'required|integer');
            $this->form_validation->set_rules('introduce', '文章分类', 'required|max_length[50]');
            $this->form_validation->set_rules('content', '文章分类', 'required|max_length[2000]');
            if($this->form_validation->run()){
                echo 'fdfd';die();
            }
        }
        $this->load->view('admin/article_add');
    }

    // public function copy(){
    //     $this->load->view('admin/copy');
    // }
}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */