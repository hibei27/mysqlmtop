<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="page-header">
  <h2>应用回收站<small></small></h2>
</div>
  
<div class="btn-toolbar">
                <div class="btn-group">
                  <a class="btn btn-default " href="<?php echo site_url('application/add') ?>"><i class="fui-new-16"></i>&nbsp;新增</a>
                  <a class="btn btn-default" href="<?php echo site_url('application/index') ?>"><i class="fui-menu-16"></i>&nbsp;列表</a>
                  <a class="btn btn-default active" href="<?php echo site_url('application/trash') ?>"><i class="fui-calendar-16"></i>&nbsp;回收站</a>
                </div>
</div> <!-- /toolbar -->               
<hr/>
              
<table class="table table-hover table-striped  table-bordered table-condensed">
	<tr>
		<th>应用名称</th>
        <th>显示名称</th>
		<th>是否启用</th>
        <th>管理</th>
	</tr>
	
 <?php if(!empty($datalist)) {?>
 <?php foreach ($datalist  as $item):?>
    <tr style="font-size: 13px;">
		<td><strong><?php echo $item['name'] ?></strong></td>
        <td><?php echo $item['display_name'] ?></td>
		<td><?php echo check_status($item['status']) ?></td>
        <td><a href="<?php echo site_url('application/recover/'.$item['id']) ?>" title="还原"><i class="icon-repeat"></i></a>&nbsp;<a href="<?php echo site_url('application/forever_delete/'.$item['id']) ?>" class="confirm_delete" title="彻底删除" ><i class="icon-remove"></i></a></td>
	</tr>
 <?php endforeach;?>
   <tr>
  <td colspan="12">
  共查询到<font color="red" size="+1"><?php echo $datacount ?></font>条记录.
  </td>
  </tr>
<?php }else{  ?>
<tr>
<td colspan="12">
<font color="red">对不起，没有查询到相关数据！</font>
</td>
</tr>
<?php } ?>
	 
</table>


<script src="./bootstrap/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
	$(' .confirm_delete').click(function(){
		return confirm('是否要彻底删除该信息？');	
	});
</script>
