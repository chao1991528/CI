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

    public function article_all($where='', $limit='', $select='*'){
        if(!empty($where)){
            if(!empty($limit)){
                return  $this->db
                                    ->select($select) 
                                    ->from($this->table)
                                    ->join('category', 'article.cid=category.category_id')
                                    ->where($where)
                                    ->order_by('aid', 'desc')
                                    ->limit($limit)
                                    ->get()
                                    ->result_array();
                        }
                 return   $this->db
                                        ->select($select) 
                                        ->from($this->table)
                                        ->join('category', 'article.cid=category.category_id')
                                        ->where($where)
                                        ->order_by('aid', 'desc')
                                        ->get()
                                        ->result_array();
        }
         
            if(!empty($limit)){
                return  $this->db
                                    ->select($select) 
                                    ->from($this->table)
                                    ->join('category', 'article.cid=category.category_id')
                                    ->order_by('aid', 'desc')
                                    ->limit($limit)
                                    ->get()
                                    ->result_array();
            }
            return  $this->db
                                ->select($select) 
                                ->from($this->table)
                                ->join('category', 'article.cid=category.category_id')
                                ->order_by('aid', 'desc')
                                ->get()
                                ->result_array();
    }
    // public function article_all(){
    //     return $this->db->get($this->table)->result_array();
    // }
    public function get_article_attr($select, $limit){
          return  $this -> db
                                ->select($select) 
                                ->from($this->table)
                                ->order_by('aid', 'desc')
                                ->limit($limit)
                                ->get()
                                ->result_array();
    }
    public function find_article($article_id){
        return $this->db->where(array('aid'=>$article_id))->get($this->table)->result_array();
    }

    public function update_article($data, $id){
        return $this->db->update($this->table,$data, array('aid'=>$id));
    }

    public function article_del($article_id){
        return $this->db->delete($this->table, array('article_id'=>$article_id));
    }
}