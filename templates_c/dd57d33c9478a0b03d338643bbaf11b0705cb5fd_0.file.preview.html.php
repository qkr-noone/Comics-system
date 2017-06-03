<?php
/* Smarty version 3.1.30, created on 2017-05-22 16:41:21
  from "D:\wamp64\www\PDO\lession_3\html\mobile\preview.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592314b122e383_14764521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd57d33c9478a0b03d338643bbaf11b0705cb5fd' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\mobile\\preview.html',
      1 => 1495471271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592314b122e383_14764521 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mui 5</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable
=no">
	<link href="public/library/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/library/mui/css/mui.min.css">
    <?php echo '<script'; ?>
 src="public/library/jquery.min.js"><?php echo '</script'; ?>
>

	<style>
		.mui-bar{ background-color: #f9ff0b;}
	</style>
</head>
<html>
<body class="mui-fullscreen">

	<!-- 侧滑导航根容器 -->
	<div class="mui-off-canvas-wrap mui-draggable" style="height: 50px;">
		<!-- 菜单容器 -->
		<aside class="mui-off-canvas-left" id="offCanvasWrapper">
			<div class="mui-scroll-wrapper">
				<div class="mui-scroll">
					<!-- 菜单具体展示内容 -->
					<ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted">
							<li class="mui-table-view-cell">
								<a href="mui.html" class="mui-navigate-right">
									
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a href="cate.html" class="mui-navigate-right">
									分类
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 3
								</a>
							</li>
						 
						</ul>
				</div>
			</div>
		</aside>

		<div class="mui-inner-wrap mui-transitioning">
			<!-- 主页面标题 -->
			<header class="mui-bar mui-bar-nav">
				<a class="mui-icon mui-action-menu mui-icon-bars mui-pull-left" href="#offCanvasWrapper"></a>
				<h1 class="mui-title"><?php echo $_smarty_tpl->tpl_vars['manga_info']->value['manga_name'];?>
</h1>
			</header>
		</div>

	</div>
	<div style="text-align:center;margin-top:10px;width: auto;overflow: hidden;" class="img-responsive"><?php echo $_smarty_tpl->tpl_vars['manga_info']->value['manga_content'];?>
</div>

	<?php echo '<script'; ?>
 type="text/javascript" src="public/library/mui/js/mui.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
			mui.init();
		 
			 
			 //主界面和侧滑菜单界面均支持区域滚动；
			 
			mui('#offCanvasContentScroll').scroll();
		 
		<?php echo '</script'; ?>
>

</body>
</html><?php }
}
