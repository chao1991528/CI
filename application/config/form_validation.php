<?php
   $config = array(
               'article'=>array(
                  array(
                     'field'   => 'title', 
                     'label'   => '文章标题', 
                     'rules'   => 'required|min_length[5]'
                  ),
                  array(
                        'field'   => 'type', 
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
               )                
            );
?>