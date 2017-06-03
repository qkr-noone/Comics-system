<?php
/* Smarty version 3.1.30, created on 2017-05-26 16:35:51
  from "D:\wamp64\www\PDO\lession_3\html\manga\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59285967009d04_97216018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8a7516e2479d859077698d8109d451ff16a554' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\manga\\add.html',
      1 => 1495695425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59285967009d04_97216018 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container" style="width:750px">
 	<!-- action不可以直接传参数 --> 
 	<form action="index.php" enctype="multipart/form-data" method="post">

 		<div class="form-group">
 			<label >详情名称：</label>
 			<input type="text" class="form-control" name="manga_name"></div>
 		<div class="form-group">
 			<label >具体内容：</label>
 			<!-- 百度的编辑器支持图片 --> 
 			<textarea  id="baidu_editer"  style="height:380px" name="manga_content"></textarea>
 		</div>
 		<div class="form-group">
 			<label >缩略图：</label>
 			<input type="file"  name="comics_icon"></div>
 		<div class="form-group">
 			<!-- control=student&action=save --> 
 			<input type="hidden" name="controler" value="manga"> 
 			<input type="hidden" name="action" value="save"> 
 			<input type="hidden" name="comics_ID" value="<?php echo $_GET['cartnoon_id'];?>
"> 
 			<input type="submit"  class="btn btn-info" value="保存信息"></div>
 	</form>
 </div>

 <?php echo '<script'; ?>
  src="public/library/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
  src="public/library/ueditor/ueditor.all.min.js"><?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
 type="text/javascript">UE.getEditor("baidu_editer");<?php echo '</script'; ?>
>
 </body>
 </html><?php }
}
