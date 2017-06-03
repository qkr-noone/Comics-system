<?php
/* Smarty version 3.1.30, created on 2017-05-26 13:47:03
  from "D:\wamp64\www\PDO\lession_3\html\home\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592831d792da53_28193856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd865c4ac935cc72c37bbd1d8ac3de75b071a7cc' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\home\\index.html',
      1 => 1495806015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_592831d792da53_28193856 (Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<style type="text/css">

</style>
 <div class="container">
 	<section class="home-index">
 		<ul>
 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartnoon_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
 			<li >
 				<div>
 					<a href="index.php?controler=cartnoon&action=preview&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
">
 						<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['comics_icon'];?>
"  class="img-responsive"></a>
 				</div>
 				<h4><?php echo $_smarty_tpl->tpl_vars['value']->value['comics_name'];?>
</h3>
 			</li>
 			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 		</ul>
 	</section>
 </div>
 </body>
 </html><?php }
}
