<?php
class manga{

	/* 显示*/
	public function index(){


		global  $pdo,$smarty;
	 	// 漫画ID  comics_ID---cartnoone
	 	//GET id 为url中的id   url 中的id 是从 遍历出来的数据表中的values值中的获取manga中的ID
	 	///GET得到的是index.php?controler=manga&action=index&id=3&uu=99 
	 	//$_GET['id'] 获取参数前面的id 
	 	$cartnoon_id=$_GET['id'];
	 	// 查询漫画的名称  前后获取 可以得到名称
	 	/*容易出错  */
	 	//通过id 即是 $cartnoon_id  找到数据表中对应的ID的一条数据信息（$cartnoon_info）
	 	$cartnoon_info=$pdo->find("cartnoon",array("ID"=>$cartnoon_id));
 		////通过id 即是 $cartnoon_id  在manga表中通过comics_ID查找数据表中全部的数据信息（$cartnoon_info）
 		$smarty->assign("cartnoon_info",$cartnoon_info);
	 	$manga_list=$pdo->select("manga",array("comics_ID"=>$cartnoon_id),"ID desc");
	 	$smarty->assign("manga_list",$manga_list);
	}

	/*添加*/
	public function add(){

	}

	/*  保存*/
	/*把数据上传到数据库中保存  包括 图片文字*/
	public function save(){
		global $pdo;
		//图片路径的变量
		$pic_path="public/uploads/".time().".jpg";
		// 目的 把图片存放的 项目指定的位置
		copy($_FILES['comics_icon']['tmp_name'],$pic_path);//保存过来的图片
		/*键值对 对应的数据操作*/
		$save_data=array(
			'comics_ID'=>$_REQUEST['comics_ID'],
			'manga_name'=>$_REQUEST['manga_name'],
			'manga_content'=>$_REQUEST['manga_content'],
			'comics_icon'=>$pic_path,
			'create_time'=>time(),
		);
		//添加一条记录
		$pdo->add('manga',$save_data);
		header("location:index.php?controler=manga&action=index&id=".$_REQUEST['comics_ID']);
		exit();

	}
	//删除
	public function delete($value=''){
		global $pdo;
		$pdo->delete("manga",array("ID"=>$_GET['id']));
		header("location:index.php?controler=manga&action=index&ID={value['ID']}");
	 	 exit();
	}
	//预览
	public function preview($value=''){
		//查询
		global $pdo,$smarty;
		$manga_info=$pdo->find("manga",array("ID"=>$_GET['ID']));
		 //str_replace 替换函数  $manga_content中的  $nbsp 替换为 ""    
	 	 //输出为 $manga_info['manga_content']
		$smarty->assign("manga_info",$manga_info);


	}
}

?>