<?php
/* Smarty version 3.1.30, created on 2017-05-31 19:58:22
  from "D:\wamp64\www\PDO\lession_3\html\category\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592f205e516d01_20449184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8273fd4cde31e2f3b04d906e47c430531c1531e' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\category\\edit.html',
      1 => 1496260700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_592f205e516d01_20449184 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="container" style="width:580px">
		<!-- action不可以直接传参数 -->
		<form action="index.php" enctype="multipart/form-data" method="post">

			<div class="form-group">
				<label >分类名称：</label>
				<input type="text" class="form-control" name="cate_name"  value="<?php echo $_smarty_tpl->tpl_vars['cate_info']->value['cate_name'];?>
"></div>
			 <div class="form-group">
				<label >采集地址：</label>
				<input type="text" class="form-control" name="cate_url" value="<?php echo $_smarty_tpl->tpl_vars['cate_info']->value['cate_url'];?>
"></div>
			<div class="form-group">
				<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['cate_info']->value['ID'];?>
">
				<input type="hidden" name="controler" value="category">
				<input type="hidden" name="action" value="update">
				<input type="submit"  class="btn btn-info" value="更新信息"></div>
		</form>
	</div>
</body>
</html><?php }
}
