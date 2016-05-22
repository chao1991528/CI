<div id="header">
    <div class='logo'></div>
    <div class='navigation'>
            <a href="<?php echo base_url();?>">首页</a>
            <?php foreach($cates as $v):?>
            <a href="<?php  echo site_url('index/home/category/'. $v['category_id']) ;?>"><?php echo $v['category_name'];?></a>
            <?php endforeach ?>
    </div>
</div>