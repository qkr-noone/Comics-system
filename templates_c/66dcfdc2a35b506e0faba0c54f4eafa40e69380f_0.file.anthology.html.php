<?php
/* Smarty version 3.1.30, created on 2017-05-22 16:33:48
  from "D:\wamp64\www\PDO\lession_3\html\mobile\anthology.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592312ec8a89a3_11396306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66dcfdc2a35b506e0faba0c54f4eafa40e69380f' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\mobile\\anthology.html',
      1 => 1495470827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592312ec8a89a3_11396306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta>
	<title>mui 5</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="public/library/mui/css/mui.min.css">
	<link rel="stylesheet" type="text/css" href="public/library/bootstrap.min.css">
	<style type="text/css">
		.mui-bar{ background-color: #f9ff0b }
	</style>
</head>	
	
<body>
	<<header class="mui-bar mui-bar-nav">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">漫画列表</h1>
	</header>

	<div class="container">
	<section>
		<div class="row">
			<div class="col-lg-6 ">
			<!-- class="img-responsive" 自适应  cente-block水平居中 -->
				<img src="<?php echo $_smarty_tpl->tpl_vars['cartnoon_info']->value['comics_icon'];?>
" class="img-responsive center-block"
				style="width: 60%;margin-top: 20px;">
			</div>
			<div class="col-lg-6">
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
