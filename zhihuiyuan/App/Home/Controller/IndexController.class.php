<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class IndexController extends HomeController {
    public function index(){
    	
			//显示文章内容 
 		$content = M('datas')->where('id >1 && id <7')->select();
 		$str = $content['content'];
		//把内容标签输出成字符
 		$matter = htmlspecialchars_decode($str) ;
		$this->assign('matter',$matter);
 		$this->assign('title',$title);
 		$this->assign('content',$content);
     
     
        $this->display();
    }



    	



   }