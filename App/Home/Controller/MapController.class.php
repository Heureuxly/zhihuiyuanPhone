<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class Mapcontroller  extends controller{
	public function index(){
		//判断SESSION
    	if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
		
		$this->display();

	}
}