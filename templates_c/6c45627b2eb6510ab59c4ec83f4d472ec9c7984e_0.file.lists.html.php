<?php
/* Smarty version 3.1.30, created on 2017-06-03 08:51:14
  from "D:\wamp64\www\PDO\lession_3\html\category\lists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593278821dfa46_00543167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c45627b2eb6510ab59c4ec83f4d472ec9c7984e' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\category\\lists.html',
      1 => 1496479873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_593278821dfa46_00543167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
	<ul class="cate_list">
		<li>
			<a href="index.php?controler=category&action=lists">全部</a>
		</li>
		<!-- 遍历 显示在 html 中 得到 cate_name -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<li>
			<a href="index.php?controler=category&action=lists&tag=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</a>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
	
	<section class="home-index">
		
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartnoon_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<li>
				<div>
					<a href="index.php?controler=cartnoon&action=preview&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['comics_icon'];?>
" class="img-responsive"></a>
				</div>
				<h3><?php echo $_smarty_tpl->tpl_vars['value']->value['comics_name'];?>
</h3>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>

	</section>

</div><?php }
}
