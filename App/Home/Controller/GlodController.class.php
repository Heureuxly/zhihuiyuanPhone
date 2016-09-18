<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class GlodController extends Controller {
    public function index(){
    	//判断SESSION
    	if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
    	
    	//下拉列表和首页连接接受的值
		$tit = M('datas')->where('id < 13 && id>1')->select();
		if($_GET['nid']!=''&&$_GET['id']=''){
			$newsCount1 = M('info')->where('id = '.$_GET['nid'])->find();
	    	$str1 = $newsCount1['infoname'];
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;

		}elseif ($_GET['id']!=''&&$_GET['nid']=''){
			$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        }
	   
	    	if($_GET['id']!=''){
	    	$newsCount = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
		}
		// /////////////////////////
		if($_GET['nid']!=''){
	    	$newsCount1 = M('info')->where('id = '.$_GET['nid'])->find();
	    	$str1 = $newsCount1['infoname'];
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }
	    //首页左侧列表
		if($_GET['id']!=''){
	    	$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        }
	   
	    	if($_GET['id']!=''){
	    	$newsCount = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }

		$tit1 = M('datas')->where('id'= $id)->select();
		$tit2 = M('datas')->where('id = 2')->find();

		$tit2['content'] = htmlspecialchars_decode($tit2['content']);
		$newsCount2 = M('datas')->where('did = '.$_GET['id'])->select();
		$content2 = getTypeStr2();
		$this->assign('content2',$content2);
    	$this->assign('newsCount2',$newsCount2); 
		$this->assign('str1',$str1);
	    $this->assign('matter',$matter);
	  	$this->assign('tit2',$tit2);
		$this->assign('tit',$tit);
        $this->display();
    }
    public function goldproject(){
    		//内容页左侧列表
    		$tit = M('datas')->where('id < 13 && id>1')->select();
    		if($_GET['id']!=''){
	    	$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }
	        $newsCount2 = M('datas')->where('did = '.$_GET['id'])->select();
	        $content2 = getTypeStr2();
	        $this->assign('content2',$content2);
    	    $this->assign('newsCount2',$newsCount2); 
	        $this->assign('str1',$str1);
    		$this->assign('matter',$matter);
	        $this->assign('tit',$tit);
	       
	        $this->display();
	    
    }
   


    // function goldproject(){

    // 	// $con = M('datas')->where('')
    // 	$this->display("Glod/goldproject");
    // }



    	



   }