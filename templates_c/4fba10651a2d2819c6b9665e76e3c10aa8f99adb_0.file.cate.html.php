<?php
/* Smarty version 3.1.30, created on 2017-05-22 15:07:50
  from "D:\wamp64\www\PDO\lession_3\html\mobile\cate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5922fec6753e20_66081752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fba10651a2d2819c6b9665e76e3c10aa8f99adb' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\mobile\\cate.html',
      1 => 1495465650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5922fec6753e20_66081752 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mobile</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable
=no">
	<link rel="stylesheet" type="text/css" href="public/library/mui/css/mui.min.css">
	<link href="public/library/bootstrap.min.css" type="text/css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="public/library/jquery.min.js"><?php echo '</script'; ?>
>
	<style>.mui-bar{ background-color: #f9ff0b }


			.mui-control-content {
				background-color: white;
				min-height: 215px;
			}
			.mui-control-content .mui-loading {
				margin-top: 50px;
			}
		
	</style>
</head>
<body >

	<header class="mui-bar mui-bar-nav">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">漫画列表</h1>
	</header>
	<div class="mui-content">
		<div id="slider" class="mui-slider" >
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate_item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate_item']->value) {
?>

			<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
				<a class="mui-control-item mui-active" href="#item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
}"><?php echo $_smarty_tpl->tpl_vars['cate_item']->value['cate_name'];?>
</a>
			<?php } else { ?>
				<a class="mui-control-item" href="#item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
}"><?php echo $_smarty_tpl->tpl_vars['cate_item']->value['cate_name'];?>
</a>
			<?php }?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
			</div>

			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-<?php echo $_smarty_tpl->tpl_vars['col_num']->value;?>
" ></div>
			<div class="mui-slider-group" >
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate_itme', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate_itme']->value) {
?>
			 
				<div id="item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="mui-slider-item mui-control-content ">
					<div id="scroll<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="mui-scroll-wrapper" >
						<div class="mui-scroll" >
							<ul class="mui-table-view">
								<li class="mui-table-view-cell">第<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
个选项卡子项-1</li>
								 
							</ul>
						</div>
						<div class="mui-scrollbar mui-scrollbar-vertical">
							<div class="mui-scrollbar-indicator" ></div>
						</div>
					</div>
				</div>
			 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
			
		</div>
	</div>


	<?php echo '<script'; ?>
 type="text/javascript" src="public/library/mui/js/mui.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
			mui.init({
				swipeBack: false
			});
			(function($) {
				$('.mui-scroll-wrapper').scroll({
					indicators: true //是否显示滚动条
				});
		
				var sliderSegmentedControl = document.getElementById('sliderSegmentedControl');
				$('.mui-input-group').on('change', 'input', function() {
					if (this.checked) {
						sliderSegmentedControl.className = 'mui-slider-indicator mui-segmented-control mui-segmented-control-inverted mui-segmented-control-' + this.value;
						//force repaint
						sliderProgressBar.setAttribute('style', sliderProgressBar.getAttribute('style'));
					}
				});
			})(mui);
		<?php echo '</script'; ?>
>
</body>
</html><?php }
}
