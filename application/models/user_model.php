<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 用户模型
*/
class User_model extends CI_Model{
    protected $table = 'user';
    /**
     * 登录验证
     */
    public function login_check($username, $password){
        $user = $this->find_user_by_attr(array('username'=>$username));
        if(empty($user)){
            return false;
        }elseif($user[0]['password'] != md5($password)){
            return false;
        }
        $userInfo = array(
            'username' => $user[0]['username'],
            'user_id' => $user[0]['user_id'],
            'last_login_time' => date('Y-m-d H:i:s', time()) 
        );
        $this->session->set_userdata($userInfo);
        return true;

    }

    public function user_all(){
        return $this->db
                    ->select('user_title, aid, category_name,add_time,atype')
                    ->from($this->table)->join('category', 'user.cid=category.category_id')
                    ->order_by('aid', 'desc')
                    ->get()
                    ->result_array();
    }
    // public function user_all(){
    //     return $this->db->get($this->table)->result_array();
    // }

    public function find_user_by_attr($arr){
        return $this->db->where($arr)->get($this->table)->result_array();
    }

    public function update_user($data, $id){
        return $this->db->update($this->table,$data, array('aid'=>$id));
    }

    public function user_del($user_id){
        return $this->db->delete($this->table, array('user_id'=>$user_id));
    }
}