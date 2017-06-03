<?php

// 分类的控制器

class category{


	public function index()
	{
		global  $pdo,$smarty;

	 	$category_list=$pdo->select("category","","ID");
	 	$smarty->assign("category_list",$category_list);
	}


	public function add()
	{
		
	}
	//编辑
	public function edit(){
		global $pdo,$smarty;
		//查询当前漫画的信息
		$cate_info=$pdo->find("category",array("ID"=>$_GET['id']));

		$smarty->assign("cate_info",$cate_info);
	}
	//保存
	 public function save()
	 {
	 	 global $pdo;

	  
	 	 // 添加一条记录
	 	 $pdo->add("category",array('cate_name'=>$_REQUEST['cate_name']));

	 	 header("location:index.php?controler=category&action=index");
	 	 exit();
	 }

	 //预览  暂时不写
	/* public function preview(){

	 }*/

 	// 更新
	 public function update()
	 {
	 	  global $pdo;
 		
 		// 更新的时候如果没有对图片进行更新的话，保存会清空之前？！	 	
	
 	    $save_data=array(
 	 		'cate_name'=>$_REQUEST['cate_name'],
 	 		/*   category还是  cartnoon*/
 	 		'cate_url'=>$_REQUEST['cate_url'],
 	 	);
	 	 // 更新一条记录
	 	 $pdo->update("category",array("ID"=>$_REQUEST['ID']),$save_data);

	 	 header("location:index.php?controler=category&action=index");
	 	 exit();
	 }

	 //数据列表 lists
	 public function lists($value='')
	 {
	 	global $pdo,$smarty;

	 	//获取分类ID  ???
	 	$ID =isset($_GET['tag'])?$_GET['tag']:0;
	 	$where_data=array();

	 	//点击具体的分类，显示对应的漫画类列表
	 	if ($ID>0) {
	 		$where_data=array("cate_ID"=>$ID);
	 	}

	 	$category_list =$pdo->select("category","","ID desc");
	 	$smarty->assign("category_list",$category_list);

	 	$cartnoon_list =$pdo->select("cartnoon",$where_data,"ID desc");
	 	$smarty->assign("cartnoon_list",$cartnoon_list);
	 }

	 //采集
	public function collect(){
		global $pdo;
		$cate_info=$pdo->find("category",array("ID"=>$_GET['id']));
		
		//exec 方法执行命名行的命令 (/lession_5/data_collection.js  )/*有空格*/ 
		//命令行执行 node data_collection.js url
		exec("node ../lession_5/manga_list.js ".$cate_info['cate_url']);
		//把cate.json 数据取出来 cate_json
		$cate_json=file_get_contents("cate.json");
		//得到的json  jcate_json转换为 数组 cate_list
		$cate_list=json_decode($cate_json,true);
		//为true是转为数组


		//遍历得到的数组 放入数据库

		foreach ($cate_list as $key => $value) {
			//使用pdo
			$pdo->add("cartnoon",array(
					"comics_name"=>$value['title'],
					"comics_icon"=>$value['img_src'],
					"comics_brief"=>$value['description'],
					/*  node 采集的url */
					"comics_url"=>$value['href'],
					/*  id  */
					"cate_ID"=>$_GET['id'],
					"create_time"=>time()
				));
		}
		exit();

	}

}

?>