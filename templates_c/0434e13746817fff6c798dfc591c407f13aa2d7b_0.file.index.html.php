<?php
/* Smarty version 3.1.30, created on 2017-05-26 12:56:35
  from "D:\wamp64\www\PDO\lession_3\html\category\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592826039ea0c2_64883702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0434e13746817fff6c798dfc591c407f13aa2d7b' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\category\\index.html',
      1 => 1495803249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_592826039ea0c2_64883702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- smarty怎么进行文件的引入 -->
<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

	<h3>分类列表</h3>
	<a href="index.php?controler=category&action=add" class="btn btn-success">添加分类</a>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>分类名称</th>
			<th>操作</th> 
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</td>
			 
			<td>
				<!-- 暂时不写预览 -->
				<!-- <a href='index.php?controler=category&action=preview&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn btn-success'>预览</a> -->
				<a href='index.php?controler=category&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn btn-success'>编辑</a>
				<a href='index.php?controler=category&action=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn btn-info'>更新</a>
				<a href='index.php?controler=category&action=collect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
' class='btn btn-danger'>采集</a>		 
				<a href='index.php?controler=category&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value["ID"];?>
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
