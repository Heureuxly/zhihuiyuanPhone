<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class IndexController extends HomeController {
    public function index(){
    		if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
    //	print_r($_SESSION);
    	print_r($_COOKIE);
    	
			//显示文章内容 
 		$content = M('datas')->where('id >1 && id <7')->select();
 		$str = $content['content'];
		//把内容标签输出成字符
 		$matter = htmlspecialchars_decode($str) ;
 		$content1 = M('datas')->where('id >6 && id <= 12')->select();
 		$str1 = $content1['content1'];
 		$matter1 = htmlspecialchars_decode($str1);
 		$content2 = getTypeStr2();
 		$this->assign('content2',$content2);
 		$this->assign('content1',$content1);
		$this->assign('matter',$matter);
 		$this->assign('title',$title);
 		$this->assign('content',$content);
     
     
        $this->display();
    }



    	



   }