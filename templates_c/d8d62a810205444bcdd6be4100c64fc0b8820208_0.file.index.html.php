<?php
/* Smarty version 3.1.30, created on 2017-06-03 10:09:16
  from "D:\wamp64\www\PDO\lession_3\html\cartnoon\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59328acc9023d4_16104032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d62a810205444bcdd6be4100c64fc0b8820208' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\cartnoon\\index.html',
      1 => 1496484550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59328acc9023d4_16104032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
	<h3>漫画信息展示</h3>
	<a href="index.php?controler=cartnoon&action=add" class="btn btn-success"> 添加信息</a>
	<a href="index.php?controler=category&action=index" class="btn btn-success"> 分类管理</a>

	<ul class="cate_list">
		<li>
			<a href="index.php?controler=cartnoon&action=index">全部</a>
		</li>
		<!-- 遍历 显示在 html 中 得到 cate_name -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<li>
			<a href="index.php?controler=cartnoon&action=index&tag=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</a>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div>
<style>
	
</style>
<div class="container">
	<table class="table">
	<tr class="row">
		<th class="col-lg-1">ID</th>
		<th class="col-lg-2">动漫</th>
		<th class="col-lg-1">图片</th>
		<th class="col-lg-4">简介</th>
		<th class="col-lg-4">操作</th>
	</tr>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartnoon_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

		<tr class="row">
			<td class="col-lg-1"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
</td>
			<td class="col-lg-2"><?php echo $_smarty_tpl->tpl_vars['value']->value['comics_name'];?>
</td>
			<td class="col-lg-1"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['comics_icon'];?>
" style='width:60px'></td>
			<td class="col-lg-4 ellipsis"><?php echo $_smarty_tpl->tpl_vars['value']->value['comics_brief'];?>
</td>
			<td class="col-lg-4">
			<a href='index.php?controler=cartnoon&action=preview&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn 	btn-success'>预览</a>
			<a href='index.php?controler=manga&action=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn 	btn-success'>查看</a>
			<a href='index.php?controler=cartnoon&action=collect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn 	btn-danger'>采集</a>
			<a href='index.php?controler=cartnoon&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn btn-danger'>删除</a>
			</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
	
</div>


</body>
</html><?php }
}
