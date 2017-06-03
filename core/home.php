<?php
//控制首页

class home{
	public function index(){
		global $pdo,$smarty;

		$cartnoon_list=$pdo->select("cartnoon","","ID desc");

		$smarty->assign("cartnoon_list",$cartnoon_list);
	}
}

?>