<?php
/* Smarty version 3.1.30, created on 2017-05-20 12:53:15
  from "D:\wamp64\www\PDO\lession_3\html\cartnoon\preview.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59203c3bc01330_58321173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d14e8cdaad6dc402e552f607a78fb5b86cd5aa' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\cartnoon\\preview.html',
      1 => 1495284783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59203c3bc01330_58321173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<div class="container">
	<section>
		<div class="row">
			<div class="col-lg-4 ">
			<!-- class="img-responsive" 自适应  cente-block水平居中 -->
				<img src="<?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['comics_icon'];?>
" class="img-responsive center-block"
				style="width: 60%;margin-top: 20px;">
			</div>
			<div class="col-lg-8">
				<h3><?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['comics_name'];?>
</h3>
				<div><?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['comics_brief'];?>
</div>
			</div>
		</div>
	</section>


	<section>
			<div class="row manga_list">
				<ul style="height: auto;">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manga_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					<li style="height: auto;">
						<div class="col-lg-4 center-block">
							<a href="index.php?controler=manga&action=preview&ID=<?php echo $_smarty_tpl->tpl_vars['value']->value['ID'];?>
">
							<img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['comics_icon'];?>
" alt=""></a>
						</div>
						<div class="col-lg-4 center-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['manga_name'];?>
</div>
						<!-- <div class="col-lg-3"><?php echo $_smarty_tpl->tpl_vars['value']->value['create_time'];?>
</div> -->
						<div class="col-lg-4 center-block"><?php echo date("m-d",$_smarty_tpl->tpl_vars['value']->value['create_time']);?>
</div>
					</li>
					
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
		</section>		
</div>


</body>
</html><?php }
}
