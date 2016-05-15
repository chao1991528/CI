<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() . '/assets/admin/css/public.css';?>"/>
    <title>添加文章栏目</title>
</head>
<body>
    <table class='table'>
        <tr>
            <td class='th' colspan='10' style='text-align: center;'>栏目列表</td>
        </tr>
        <tr>
            <td>编号</td>
            <td>分类名称</td>
            <td>操作</td>
        </tr>
        <?php foreach($categorys as $v):?>
        <tr>
            <td><?php echo $v['category_id'];?></td>
            <td><?php echo $v['category_name'];?></td>
            <td>
                <a href="<?php echo site_url('admin/category/category_edit/'.$v['category_id']);?>">编辑</a>
                <a href="<?php echo site_url('admin/category/category_del/'.$v['category_id']);?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>