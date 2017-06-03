<?php
class cartnoon{

	/* 显示*/
	public function index(){

		global $pdo,$smarty;
		/*desc --降序 默认是升序（asc）*/

		$ID =isset($_GET['tag'])?$_GET['tag']:0;
	 	$where_data=array();

	 	//点击具体的分类，显示对应的漫画类列表
	 	if ($ID>0) {
	 		$where_data=array("cate_ID"=>$ID);
	 	}

	 	$category_list =$pdo->select("category","","ID desc");
	 	$smarty->assign("category_list",$category_list);

	 	$cartnoon_list=$pdo->select("cartnoon",$where_data,"ID");

		$smarty->assign("cartnoon_list",$cartnoon_list);
	}

	/*添加*/
	public function add(){

	}

	/*保存*/
	/*把数据上传到数据库中保存  包括 图片文字*/
	public function save(){
		global $pdo;
		//图片路径的变量
		$pic_path="public/uploads/".time().".jpg";
		// 目的 把图片存放的 项目指定的位置
		copy($_FILES['comics_icon']['tmp_name'],$pic_path);//保存过来的图片
		/*键值对 对应的数据操作*/
		$save_data=array(
			'comics_name'=>$_REQUEST['comics_name'],
			'comics_brief'=>$_REQUEST['comics_brief'],
			'comics_icon'=>$pic_path,
		);
		//添加一条记录
		$pdo->add('cartnoon',$save_data);
		header("location:index.php?controler=cartnoon&action=index");
		exit();

	}
	/*预览*/
	public function preview(){
		global $pdo,$smarty;
		
		//获取两张表格数据  cartnoon  manga

		//获取数据表cartnoon_info中的一条数据
		$cartnoon_info=$pdo->find("cartnoon",array("ID"=>$_GET['ID']));
		$smarty->assign("cartnoon_info",$cartnoon_info);

		//manga_info 
		$manga_list=$pdo->select("manga",array("comics_ID"=>$_GET['ID']),"ID desc");

		$smarty->assign("manga_list",$manga_list);

		
	}
	/*编辑*/
	public function edit() {
	 	global $pdo,$smarty;

	 	// 查询当前漫画信息
	 	$cartnoon_info=$pdo->find("cartnoon",array("ID"=>$_GET['ID']));

	 	$smarty->assign("cartnoon_info",$cartnoon_info);

	 	// 查询所有的分类
	 	$cate_info=$pdo->select("category");
	 	$smarty->assign("cartnoon_info",$cartnoon_info);

	}
	/*public function update(){
		 	global $pdo;
	
		 	$save_date()
	
	
	}*/
 	public function collect(){
 		global $pdo,$smarty;

 		$cartnoon_info=$pdo->find("cartnoon",array("ID"=>$_GET['id']));
 		 /*注意项目格式  manga_content.js 文件相对于项目的位置*/
 		exec("node manga_content.js ".$cartnoon_info['comics_url']);

 		$cartnoon_json = file_get_contents("manga_content.json");

 		$cartnoon_list = json_decode($cartnoon_json,true);

 		foreach ($cartnoon_list as $key => $value) {
 			$pdo->add("manga", array(
 				/*临时代替*/
 					"comics_ID"=>$_GET['id'],
 					"manga_name"=>$value['title'],
					"comics_icon"=>$value['img_src'],
					/*content  中得到是数组html中 data-kksrc 不能直接访问图片 */
					"manga_content"=>str_replace("data-kksrc","src",$value['content']),
					"create_time"=>time()
				));
 		}
 		header("location:index.php?controler=cartnoon&action=index");
 		exit();

 	}

}

?>