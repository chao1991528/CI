<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 文章栏目控制器
*/
class Category extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index(){
        $categorys = $this->category_model->category_all();
        $data['categorys'] = $categorys;
        $this->load->view('admin/category_list', $data);
    }

    public function category_add()
    {
        $this->load->helper('form');
        if($this->input->post('send') == '添加'){
            $this->load->library('form_validation');
            if($this->form_validation->run('category')){
                $data = array(
                    'category_name' => $this->input->post('cname')
                );
                $this->category_model->category_add($data);
                success('admin/category/index', '添加栏目成功');
            }
        }
        $this->load->view('admin/category_add');
    }

    public function category_edit($id){
        $this->load->helper('form');
        $category = $this->category_model->find_category($id);
        $data['category'] = $category;
        if($this->input->post('send') == '保存'){
            $this->load->library('form_validation');
            if($this->form_validation->run('category')){
                $category_id = $this->input->post('category_id');
                $data = array(
                    'category_name' => $this->input->post('cname')
                );
                $this->category_model->update_category($category_id, $data);
                success('admin/category/index', '修改栏目成功');
            }
        }
        $this->load->view('admin/category_edit', $data);
    }

    public function category_del($id){
        $category = $this->category_model->category_del($id);
        success('admin/category/index', '删除栏目成功');
    }
}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */