<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/css/public.css' ?>">
    <title>文章添加</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <table class='table'>
            <tr>
                <td class='th' colspan='10'>发表文章</td>
            </tr>
            <tr>
                <td>标题</td>
                <td>
                    <input type='text' name='title'  value="<?php echo set_value('title');?>"/>
                    <?php  echo form_error('title', '<span style="color:#F54C4C;">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td>类型</td>
                <td>
                    <input type='radio' value="1" name="type" <?php echo set_radio('type', '1', 'true');?>/>普通
                    <input type='radio' value="2" name='type' <?php echo set_radio('type', '2');?>/>热门
                </td>
            </tr>
            <tr>
                <td>栏目</td>
                <td>
                    <select name='cid'>
                        <option value='1' <?php echo set_select('cid', '1', 'true');?>>情感</option>
                        <option value='2' <?php echo set_select('cid', '2');?>>生活</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>缩略图</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>摘要</td>
                <td>
                    <textarea rows="2" cols="30" name="introduce"><?php echo set_value('introduce');?></textarea>
                    <?php echo form_error('introduce', '<span style="color:#F54C4C;">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td>内容</td>
                <td>
                        <textarea rows="3" cols="50" name="content"></textarea>
                        <?php echo form_error('content', '<span style="color:#F54C4C;">', '</span>');?>
                </td>
            </tr>
            <tr>
                <td colspan="10"><input  type='submit' value='添加'  name="send" class="input_button"/></td>
            </tr>
        </table>
    </form>
</body>
</html>