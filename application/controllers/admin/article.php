<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 文章控制器
*/
class Article extends CI_Controller {

    public function article_add()
    {
        $this->load->helper('form');
        if($this->input->post('send') == '添加'){
            $this->load->library('form_validation');
            if($this->form_validation->run('article')){
                echo 'fdfd';die();
            }
        }
        $this->load->view('admin/article_add');
    }

    public function article_edit(){
        $this->load->helper('form');
        $this->load->view('admin/article_edit');
        if($this->input->post('send') == '添加'){
            $this->load->library('form_validation');
            if($this->form_validation->run('article')){

            }
        }
    }
}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */