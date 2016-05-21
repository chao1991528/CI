<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 文章分类栏目模型
*/
class Category_model extends CI_Model{
    protected $table = 'category';
    /**
     * 添加栏目
     */
    public function category_add($data){
        return $this->db->insert($this->table, $data);
    }

    public function category_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function get_categorys_by_limit($limit){
        $data = array();
        $data = $this->db->limit($limit)->get($this->table)->result_array();
        return $data;
    }

    public function find_category($category_id){
        return $this->db->where(array('category_id'=>$category_id))->get($this->table)->result_array();
    }

    public function update_category($category_id,$data){
        return $this->db->update($this->table,$data,array('category_id'=>$category_id));
    }

    public function category_del($category_id){
        return $this->db->delete($this->table, array('category_id'=>$category_id));
    }
}