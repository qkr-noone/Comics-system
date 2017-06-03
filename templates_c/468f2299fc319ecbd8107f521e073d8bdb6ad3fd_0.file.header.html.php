<?php
/* Smarty version 3.1.30, created on 2017-05-29 13:43:06
  from "D:\wamp64\www\PDO\lession_3\html\public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592c256a40fb14_91534336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '468f2299fc319ecbd8107f521e073d8bdb6ad3fd' => 
    array (
      0 => 'D:\\wamp64\\www\\PDO\\lession_3\\html\\public\\header.html',
      1 => 1496065385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592c256a40fb14_91534336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta chareset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>漫画管理系统</title>
    <link href="public/library/bootstrap.min.css" type="text/css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="public/library/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/library/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
        
    
        ul{ padding: 0px;margin: 0px; }
        li{ list-style: none;}
        .manga_list { margin-top: 30px;}
        .manga_list ul{ height: auto; }
        .manga_list ul li{ display: block;width: 100%;height: auto;overflow:hidden;margin-bottom: 20px; }
        .manga_list ul li div{ display: inline-block; }
        .manga_list ul li div a img{ width: 40%; }

        /* home lists */
        .home-index ul{        margin-top: 30px;     }
        .home-index ul li{ margin-top: 10px;margin-left:10px;display: inline-block; width: 23%;overflow: hidden;text-align: center;    }
        .cate_list{    margin: 20px 0; height: auto; overflow: hidden; }
        /*lists*/
        .cate_list li{ float: left; }
        .cate_list  li a{ padding: 0 10px;font-size: 16px }


        /*--------------nav------------*/
        .nav-top{  background: #c1be25; line-height: 20px; font-size: 20px; color:white; }
        .nav-top .col-lg-5,.nav-top .col-lg-2, .nav-top .col-lg-4{  float: left;  }
        .nav-top .row .col-lg-2 img{ line-height: 50px; width: 46px; padding-top: 2px;}
        
        .nav-top .row .col-lg-5 .menu_box li{
            float: left;
            line-height: 50px;
        }
        .nav-top .row .col-lg-5 .menu_box li a, .nav-top .row .col-lg-4 .login_box li a{
            text-decoration: none;
            padding:0px 20px; 
            color:white;
        }
        .nav-top .row .col-lg-4 .login_box{ display: inline-block;
            list-style: none; margin: 0px;line-height: 50px;  float: right; }
        .nav-top .row .col-lg-4 .login_box li { text-decoration: none;float: left; }
    </style>
</head>
<body>

    <header class="nav-top">

        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <img src="public/images/logo_c3508f1.png"></div>
                <div class="col-lg-5">
                    <ul class="menu_box" >
                        <li>
                            <a href="index.php?controler=home&action=index">首页</a>
                        </li>
                        <li>
                            <a href="index.php?controler=category&action=lists">列表</a>
                        </li>
                        <li >
                            <a href="index.php?controler=cartnoon&action=index">后台管理</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="login_box">
                        <li>
                            <a href="">登录</a>
                        </li>
                        <li>
                            <a href="">注册</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header><?php }
}
