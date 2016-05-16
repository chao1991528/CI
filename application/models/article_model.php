<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 文章模型
*/
class Article_model extends CI_Model{
    protected $table = 'article';
    /**
     * 添加栏目
     */
    public function article_add($data){
        return $this->db->insert($this->table, $data);
    }

    public function article_all(){
        return $this->db->select('article_title, aid, category_name,add_time,atype') ->from($this->table)->join('category', 'article.cid=category.category_id')->order_by('aid', 'desc')->get()->result_array();
    }
    // public function article_all(){
    //     return $this->db->get($this->table)->result_array();
    // }

    public function find_article($article_id){
        return $this->db->where(array('aid'=>$article_id))->get($this->table)->result_array();
    }

    public function update_article($data){
        return $this->db->update($this->table,$data);
    }

    public function article_del($article_id){
        return $this->db->delete($this->table, array('article_id'=>$article_id));
    }
}