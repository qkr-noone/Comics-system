<?php
/* Smarty version 3.1.30, created on 2017-05-24 14:51:05
  from "D:\wamp64\www\PDO\lession_3\html\category\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59259dd9849428_84826357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e2b70c5ee6afe24bf6461716b6e45e8db5f06a1' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\category\\add.html',
      1 => 1495637440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59259dd9849428_84826357 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="container" style="width:580px;margin-top: 50px;">
		<!-- action不可以直接传参数 -->
		<form action="index.php" enctype="multipart/form-data" method="post">

			<div class="form-group">
				<label >分类名称：</label>
				<input type="text" class="form-controler" name="cate_name">
			</div>
			<div class="form-group">
				<label>采集地址：</label>
				<input type="text" class="form-group" name="cate_url">
			</div>
			 
			<div class="form-group">
				<!-- controler=student&action=save -->
				<input type="hidden" name="controler" value="category">
				<input type="hidden" name="action" value="save">
				<input type="submit"  class="btn btn-info" value="保存信息"></div>
		</form>
	</div>
</body>
</html><?php }
}
