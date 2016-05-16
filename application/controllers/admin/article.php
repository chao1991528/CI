<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 文章控制器
*/
class Article extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('article_model');
    }

    public function index(){
        $this->load->library('pagination');
        $perPage = 4;
        $config['base_url'] = site_url('admin/article/index');
        $config['total_rows'] = $this->db->count_all_results('article');
        $config['per_page'] = $perPage; 
        $config['uri_segment'] = 4;
        $config['first_link'] = '首页';
        $config['last_link'] = '末页';
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $this->pagination->initialize($config); 
        $data['pager'] = $this->pagination->create_links();
        $offset = $this->uri->segment(4);
        $this->db->limit($perPage, $offset);
        $data['articles'] = $this->article_model->article_all();
        $this->load->view('admin/article_list', $data);
    }   
    public function article_add()
    {
        $this->load->helper('form');
        $this->load->model('category_model');
        $cates = $this->category_model->category_all();

        if($this->input->post('send') == '添加'){
            $this->load->library('form_validation');
            if($this->form_validation->run('article')){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '1000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['file_name'] = time() . mt_rand(100, 999);
                $this->load->library('upload', $config);
                $status = $this->upload->do_upload('thumb');
                $wrongMes = $this->upload->display_errors();
                 if($wrongMes){
                        error($wrongMes);
                }
                $img = $this->upload->data();

                //缩略图
                $thumb_conf['image_library'] = 'gd2';
                $thumb_conf['source_image'] = $img['full_path'];
                $thumb_conf['create_thumb'] = false;
                $thumb_conf['maintain_ratio'] = TRUE;
                $thumb_conf['width'] = 200;
                $thumb_conf['height'] = 200;

                $this->load->library('image_lib', $thumb_conf);
                $flag = $this->image_lib->resize();
                if(!$flag){
                    error('缩略失败');
                }

                $data = array(
                    'article_title' => $this->input->post('title'),
                    'atype' => $this->input->post('type'),
                    'cid' => $this->input->post('cid'),
                    'thumb' => $img['file_name'],
                    'content' => $this->input->post('content'),
                    'introduce' => $this->input->post('introduce'),
                    'add_time' => date('Y-m-d H:i:s', time())
                );
                $this->article_model->article_add($data);
                success('admin/article/index', '添加文章成功');
            }
        }
        $data = array('cates'=>$cates);
        $this->load->view('admin/article_add', $data);
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