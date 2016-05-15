<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/css/public.css'?>">
    <title>添加栏目</title>
</head>
<body>
    <form action="" method='post'>
        <table class='table'>
            <tr>
                <td class='th' colspan='10'>添加栏目</td>
            </tr>
            <tr>
                <td>栏目名称</td>
                <td>
                    <input type="text" name="cname" value='<?php echo set_value('cname');?>'/>
                    <?php echo form_error('cname', '<span class="errorMessage">', '</span>')?>
                </td>
            </tr>
            <tr>
                <td colspan='10'><input type="submit" class='input_button' value='添加' name="send"/></td>
            </tr>
        </table>
    </form>
</body>
</html>