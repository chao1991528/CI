<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/css/public.css'?>">
    <title>修改密码</title>
</head>
<body>
    <form action="" method='post'>
        <table class='table'>
            <tr>
                <td class='th' colspan='10'>修改用户密码</td>
            </tr>
            <tr>
                <td>用户名</td>
                <td>
                    <?php echo $this->session->userdata('username');?>
                </td>
            </tr>
            <tr>
                <td>新密码</td>
                <td>
                    <input type='password' name='password'/>
                </td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td>
                    <input type='password' name='repeatpassword'/>
                </td>
            </tr>
            <tr>
                <td colspan='10'><input type="submit" class='input_button' value='修改' name="send"/></td>
            </tr>
        </table>
    </form>
</body>
</html>