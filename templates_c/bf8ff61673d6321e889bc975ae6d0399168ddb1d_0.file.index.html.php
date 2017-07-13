<?php
/* Smarty version 3.1.30, created on 2017-07-11 02:47:42
  from "D:\wamp64\www\PDO\Comics-system\html\manga\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59643c4e726855_00549717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8ff61673d6321e889bc975ae6d0399168ddb1d' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\Comics-system\\html\\manga\\index.html',
      1 => 1496067453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59643c4e726855_00549717 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 




<div class="container">

	<h3>《 <?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['comics_name'];?>
 》动漫信息详细列表</h3>

	<a href="index.php?controler=cartnoon&action=index" class="btn btn-info">返回</a>&nbsp;
	
	<a href="index.php?controler=manga&action=add&cartnoon_id=<?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['ID'];?>
" class="btn btn-info">添加信息</a>	

</div>
<div class="container">
	<table class="table">
	<tr class="row">
		<th class="col-lg-2">ID</th>
		<th class="col-lg-4">动漫</th>
		<th class="col-lg-3">图片</th>
		<th class="col-lg-3">操作</th>
	</tr>

	<!-- if(isset($manga_list){ }   为了防止在没有数据时候报错-->
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manga_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<tr class="row">
			<td class="col-lg-2"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
</td>
			<td class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['value']->value['manga_name'];?>
</td>
			<td class="col-lg-3"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['comics_icon'];?>
" style=" width: 60px;"></td>
			<td class="col-lg-3">
				<a target='_blank' href='index.php?controler=manga&action=preview&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
' class='btn btn-success'>预览</a>
			<a href='index.php?controler=manga&action=delete&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
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
