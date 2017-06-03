<?php

class mobile{
	public function index(){

	}
	public function cate(){

		global $pdo,$smarty;

		 $cate_list=$pdo->select("category");

		 $smarty->assign("cate_list",$cate_list);

		 $col_num=12/count($cate_list);

		 $smarty->assign("col_num",$col_num);

		 $temp_list= $pdo->select('cartnoon');

		// 遍历所需要的数组    cate_ID		??
		$cartnoon_list=array();
		foreach ($temp_list as $key => $value) {
			$cartnoon_list[$value['cate_ID']][]=$value;
		}
		//得到所有的漫画数据
		$smarty->assign("cartnoon_list",$cartnoon_list);	
	}


	// 分类界面
	public function cate_ajax()	{
		 global $pdo,$smarty;

		 $cate_list=$pdo->select("category");

		 $smarty->assign("cate_list",$cate_list);//所有的分类数据
		 //菜单数据列表数组总是 count($cate_list)  12--栅格
		 $col_num=12/count($cate_list);
		 $smarty->assign("col_num",$col_num);//是菜单的底部下边框宽度控制
	}

	// 获取漫画列表 得打漫画列表数据
	public function get_ajax_data()	{
		 global $pdo,$smarty;
		
		$temp_list= $pdo->select('cartnoon');
		
		// ajax传输的数据 $temp_list转换 json 格式？？
		
		echo json_encode($temp_list);

		exit();
	}


	public function preview($valuse=''){
		global $pdo,$smarty;
		$manga_info=$pdo->find("manga",array('ID'=>$_GET['ID']));
		$smarty->assign("manga_info",$manga_info);
	}


	public function anthology(){
		global $pdo,$smarty;
		$cartnoon_info=$pdo->find("cartnoon",array("ID"=>$_GET['ID']));
		$smarty->assign("cartnoon_info",$cartnoon_info);
		$manga_list=$pdo->select("manga",array("comics_ID"=>$_GET['ID'],"ID desc"));
		$smarty->assign("manga_list",$manga_list);
	}

	
}
?>