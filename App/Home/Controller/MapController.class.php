<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class Mapcontroller  extends controller{
	public function index(){
		
		$this->display();

	}
}