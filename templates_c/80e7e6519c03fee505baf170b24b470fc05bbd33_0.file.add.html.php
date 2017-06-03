<?php
/* Smarty version 3.1.30, created on 2017-05-18 08:26:49
  from "D:\wamp64\www\PDO\lession_3\html\cartnoon\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591d5ac9caced0_43126434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e7e6519c03fee505baf170b24b470fc05bbd33' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\cartnoon\\add.html',
      1 => 1495096005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_591d5ac9caced0_43126434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container" style="width:700px">
		<!-- action不可以直接传参数  multipart -->
		<form action="index.php" enctype="multipart/form-data" method="post">

			<div class="form-group">
				<label >漫画名称：</label>
				<input type="text" class="form-control" name="comics_name"></div>
			<div class="form-group">
				<label >简介：</label>
				<textarea  id="" style="width: 667px;
    height: 313px;border-radius:7px;" name="comics_brief"></textarea>
			</div>
			<div class="form-group">
				<label >图片:</label>
				<input type="file"  name="comics_icon"></div>
			<div class="form-group">

				<input type="hidden" name="controler" value="cartnoon">
				<input type="hidden" name="action" value="save">
				<input type="submit"  class="btn btn-info" value="保存信息"></div>
		</form>
	</div>
</body>
</html><?php }
}
