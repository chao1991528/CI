<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 前台默认控制器
*/
class Home extends CI_Controller {

    public function index()
    {
        // $this->output->enable_profiler(true);
        $this->load->model('category_model');
        $cates = $this->category_model->get_categorys_by_limit(4);
        $data['cates'] = $cates;

        $this->load->model('article_model');
        $putong = $this->article_model->article_all(array('atype'=>1), 3);
        $hot = $this->article_model->article_all(array('atype'=>2), 3);
        $data['putong'] = $putong;
        $data['hot'] = $hot;

        $rightTitle = $this->article_model->get_article_attr('aid, article_title', 10);
        $data['rightTitle'] = $rightTitle;

        $this->output->cache(1/60);//页面缓存一分钟
        $this->load->view('index/index', $data);
    }

    public function category($cid){
        $this->load->model('category_model');
        $cates = $this->category_model->get_categorys_by_limit(4);
        $data['cates'] = $cates;

        $this->load->model('article_model');
        $articles = $this->article_model->article_all(array('cid'=>$cid), 3, 'aid,article_title, introduce,thumb');
        $data['articles'] = $articles;

        $rightTitle = $this->article_model->get_article_attr('aid, article_title', 10);
        $data['rightTitle'] = $rightTitle;
        $this->load->view('index/category', $data);
    }

    public function details(){
        $this->load()->view('index/details');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */