<?php
/* Smarty version 3.1.30, created on 2017-05-29 14:10:29
  from "D:\wamp64\www\PDO\lession_3\html\manga\preview.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592c2bd58edc16_79613431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0edb1664c50a82174f165bdaa7d61782db88e4b8' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\manga\\preview.html',
      1 => 1496067028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_592c2bd58edc16_79613431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="row">		
		<div class="col-lg-8 col-lg-offset-1" style="text-align:center;margin:50px auto;"><h4><?php echo $_smarty_tpl->tpl_vars['manga_info']->value['manga_name'];?>
 </h3><?php echo $_smarty_tpl->tpl_vars['manga_info']->value['manga_content'];?>
</div>
	</div>
</div>




</body>
</html><?php }
}
