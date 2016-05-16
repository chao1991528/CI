<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() . '/assets/admin/css/public.css';?>"/>
    <title>文章列表</title>
</head>
<body>
    <table class='table'>
        <tr>
            <td class='th' colspan='10' style='text-align: center;'>文章列表</td>
        </tr>
        <tr>
            <td>编号</td>
            <td>文章标题</td>
            <td>文章类型</td>
            <td>文章分类</td>
            <td>发表时间</td>
            <td>操作</td>
        </tr>
        <?php foreach($articles as $v):?>
        <tr>
            <td><?php echo $v['aid'];?></td>
            <td><?php echo $v['article_title'];?></td>
            <td><?php echo $v['atype'];?></td>
            <td><?php echo $v['category_name'];?></td>
             <td><?php echo $v['add_time'];?></td>
            <td>
                <a href="<?php echo site_url('admin/article/article_edit/'.$v['aid']);?>">编辑</a>
                <a href="<?php echo site_url('admin/article/article_del/'.$v['aid']);?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <?php echo $pager;?>
</body>
</html>