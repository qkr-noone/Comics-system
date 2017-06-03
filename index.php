<?php

//网页入口  功能入口
//学生、分数管理的入口  ？action=index 这是传入参数
/*----------知识点一 链接数据库   需要修改数据库名称-------------*/
include 'core/pdo.php'; // 获取pdo.php
$pdo=new PdoClass("localhost","comics","root","");    //数据库操作

/*---------知识点二   类的使用写法----------------------*/
/*
//引入学生类
include 'core/student.php';
// new
$stu=new student();
//调用属性
$stu->index();*/


// 引入模版引擎
include "core/library/smarty/Smarty.class.php";
$smarty=new Smarty();
$smarty->template_dir="html";

/*---------知识点四 引入具体操作类---------*/

/*REQUEST 可以接受来自post和get传递过来的值*/
$controler=$_REQUEST['controler'];/*url接收传递的具体操作值 如类别 学生类 分数累呗*/
include "core/$controler.php";

/*---------知识点三 通过url不同的参数action=..调用不同的功能 ----*/
//include 'core/student.php';

//print_r($_GET);
//$stu=new student();
$comics=new $controler();

$action=$_REQUEST['action'];/*url接收传递的具体行为值 add change index*/
$comics->$action();

//引入界面  引入所有界面
//include "html/$controler/$action.php";
//include 'html/'.$controler.'/'.$action.php;
$smarty->display("$controler/$action.html");

?>