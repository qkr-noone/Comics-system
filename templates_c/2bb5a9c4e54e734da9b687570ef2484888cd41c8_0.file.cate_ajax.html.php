<?php
/* Smarty version 3.1.30, created on 2017-05-22 12:05:32
  from "D:\wamp64\www\PDO\lession_3\html\mobile\cate_ajax.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5922d40c5bbde3_76175988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb5a9c4e54e734da9b687570ef2484888cd41c8' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\mobile\\cate_ajax.html',
      1 => 1495454729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5922d40c5bbde3_76175988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mui 5</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable
=no">
	<link rel="stylesheet" type="text/css" href="public/library/mui/css/mui.min.css">
	<style>.mui-bar{ background-color: #f9ff0b}


			.mui-control-content {
				background-color: white;
				min-height: 415px;
			}
			.mui-control-content .mui-loading {
				margin-top: 50px;
			}
			.mui-segmented-control .mui-control-item {
   				line-height: 38px;
   				display: inline-block;
   				width: 16%;
   				float: left;
   			}
   			.mui-segmented-control.mui-segmented-control-inverted~.mui-slider-progress-bar {    background-color: transparent;}
   			.mui-table-view-cell>a:not(.mui-btn) {  margin: -11px -10px;  line-height: 50px;}
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate_itme', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate_itme']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>

				<a class="mui-control-item mui-active" href="#item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_itme']->value['cate_name'];?>
</a>
			<?php } else { ?>
				<a class="mui-control-item " href="#item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_itme']->value['cate_name'];?>
</a>
			<?php }?>   
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

				<!-- 动态化 -->
			</div>
	 
		
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-<?php echo $_smarty_tpl->tpl_vars['col_num']->value;?>
" ></div>


			<div class="mui-slider-group" >
			<!-- 爆笑 -->
			<!-- 少年 -->
			<!-- 遍历两次同一个模版变量的时候，它们的键和值，需和前一次的命名要不一样 -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'cate_item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate_item']->value) {
?>
			 
				<div id="item<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="mui-slider-item mui-control-content ">
					<div id="scroll<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="mui-scroll-wrapper" >
						<div class="mui-scroll" >
							<ul class="mui-table-view mui-table-view-chevron"> 
							 
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

	 
	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/library/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/library/mui/js/mui.min.js"><?php echo '</script'; ?>
>
	<!-- 引入下拉加载更多的组件源码 -->
	<?php echo '<script'; ?>
 type="text/javascript" src="public/library/mui/js/mui.pullToRefresh.js"><?php echo '</script'; ?>
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
				

				document.getElementById('slider').addEventListener('slide', function(e) {
					if (e.detail.slideNumber === 1) {
						if (item2.querySelector('.mui-loading')) {
							setTimeout(function() {
								item2.querySelector('.mui-scroll').innerHTML = html2;
							}, 500);
						}
					} else if (e.detail.slideNumber === 2) {
						if (item3.querySelector('.mui-loading')) {
							setTimeout(function() {
								item3.querySelector('.mui-scroll').innerHTML = html3;
							}, 500);
						}
					}
				});
				
				$.ready(function() {
					//循环初始化所有下拉刷新，上拉加载。
					$.each(document.querySelectorAll('.mui-slider-group .mui-scroll'), function(index, pullRefreshEl) {

						$(pullRefreshEl).pullToRefresh({
							down: { //下拉刷新
								callback: function() {
									var self = this;
									setTimeout(function() {
										var ul = self.element.querySelector('.mui-table-view');
										ul.insertBefore(createFragment(ul, index, 10, true), ul.firstChild);
										self.endPullDownToRefresh();
									}, 1000);
								}
							},
							up: { //上拉加载更多数据
								callback: function() {
									var self = this;
									setTimeout(function() {
										var ul = self.element.querySelector('.mui-table-view');
										$.get("index.php?controler=mobile&action=get_ajax_data",{},function  (rtn_data) {
							var cartnoon_list=JSON.parse(rtn_data);

							 	var li_html="";
												 	for (var i = 0; i < cartnoon_list.length; i++) {
									 li_html+=` <li class="mui-table-view-cell mui-media">
											<a class="mui-navigate-right" href="javascript:;">
												<img class="mui-media-object mui-pull-left" src="${ cartnoon_list[i]['comics_icon']}">
												<div class="mui-media-body">
													${ cartnoon_list[i]['comics_name']}
													<p class="mui-ellipsis">	${ cartnoon_list[i]['comics_brief']}</p>
												</div>
											</a>
										</li>`;
													}
 

													jQuery(ul).append(li_html);
													self.endPullUpToRefresh();

						})
										
									}, 1000);
								}
							}
						});
					});

					// createFragment 动态加载对应的分类数据
					var createFragment = function(ul, index, count, reverse) {
						var length = ul.querySelectorAll('li').length;
						var fragment = document.createDocumentFragment();
						var li;

						// ajax请求后台，返回json字符串，转格式
						
						
						
					};
				});

			})(mui);
		<?php echo '</script'; ?>
>
</body>
</html><?php }
}
