<?php
   $config = array(
               'article'=>array(
                  array(
                     'field'   => 'article_title', 
                     'label'   => '文章标题', 
                     'rules'   => 'required|min_length[5]'
                  ),
                  array(
                        'field'   => 'atype', 
                        'label'   => '文章类型', 
                        'rules'   => 'required|integer'
                  ),
                  array(
                        'field'   => 'introduce', 
                        'label'   => '文章简介', 
                        'rules'   => 'required|max_length[50]'
                  ),   
                  array(
                        'field'   => 'content', 
                        'label'   => '文章内容', 
                        'rules'   => 'required|max_length[2000]'
                  )
               ),
               'category' => array(
                  array(
                     'field'   => 'cname', 
                     'label'   => '栏目名称', 
                     'rules'   => 'required|max_length[10]'
                  )
               ),
               'login' => array(
                  array(
                     'field'   => 'username', 
                     'label'   => '用户名', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'password', 
                     'label'   => '密码', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'yzm', 
                     'label'   => '验证码', 
                     'rules'   => 'required'
                  )
               )                
            );
?>