<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/css/public.css'?>">
    <title>文章栏目修改</title>
</head>
<body>
    <form action="" method='post'>
        <table class='table'>
            <tr>
                <td class='th' colspan='10'>栏目修改</td>
                <input type="hidden" value="<?php echo $category[0]['category_id'];?>" name='category_id'/>
            </tr>
            <tr>
                <td>栏目名称</td>
                <td>
                    <input type="text" name="cname" value="<?php echo $category[0]['category_name'];?>"/>
                    <?php echo form_error('cname', '<span class="errorMessage">', '</span>')?>
                </td>
            </tr>
            <tr>
                <td colspan='10'><input type="submit" class='input_button' value='保存' name="send"/></td>
            </tr>
        </table>
    </form>
</body>
</html>