<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/css/public.css' ?>">
    <title>文章添加</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type='hidden' name='aid' value='<?php echo $article[0]['aid'];?>'/>
        <table class='table'>
            <?php echo validation_errors();?>
            <tr>
                <td class='th' colspan='10'>修改文章</td>
            </tr>
            <tr>
                <td>标题</td>
                <td>
                    <input type='text' name='article_title' value="<?php echo $article[0]['article_title'];?>"/>
                    <?php  echo form_error('article_title', '<span class="errorMessage">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td>类型</td>
                <td>
                    <input type='radio' value="1" name="atype" <?php echo ($article[0]['atype'] ==1)?'checked="checked"':'';?>/>普通
                    <input type='radio' value="2" name='atype' <?php echo ($article[0]['atype'] ==2)?'checked="checked"':'';?>/>热门
                </td>
            </tr>
            <tr>
                <td>栏目</td>
                <td>
                    <select name='cid'>
                        <?php foreach($categorys as $v):?>
                        <option value='<?php echo $v['category_id'];?>' <?php echo ($article[0]['atype'] ==$v['category_id'])?'selected="selected"':'';?>>
                            <?php echo $v['category_name'];?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>缩略图</td>
                <td><input type="file" name='thumb'></td>
            </tr>
            <tr>
                <td>摘要</td>
                <td>
                    <textarea rows="2" cols="30" name="introduce"><?php echo $article[0]['introduce'];?></textarea>
                    <?php echo form_error('introduce', '<span class="errorMessage">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td>内容</td>
                <td>
                        <textarea rows="3" cols="50" name="content"><?php echo $article[0]['content'];?></textarea>
                        <?php echo form_error('content', '<span class="errorMessage">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td colspan="10"><input  type='submit' value='保存'  name="send" class="input_button"/></td>
            </tr>
        </table>
    </form>
</body>
</html>