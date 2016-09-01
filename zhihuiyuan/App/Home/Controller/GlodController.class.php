<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class GlodController extends Controller {
    public function index(){
    	
		$tit = M('datas')->where('id < 13 && id>1')->select();
		// $tit1 = M('datas')->where('id'= $id)->select();
		$tit2 = M('datas')->where('id = 2')->find();

		$tit2['content'] = htmlspecialchars_decode($tit2['content']);
		 

	  	$this->assign('tit2',$tit2);
		$this->assign('tit',$tit);
        $this->display();
    }
    	public function goldproject(){
    		$tit = M('datas')->where('id < 13 && id>1')->select();

    		if($_GET['id']!=''){
	    	$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount['datamane'];
	      
	       
			
	        }
	   
	    	if($_GET['id']!=''){
	    	$newsCount = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }
	        $this->assign('tit',$tit);
	        $this->assign('str1',$str1);
	        $this->assign('matter',$matter);
	        $this->display('Glod/goldproject');
	    
    }

    // function goldproject(){

    // 	// $con = M('datas')->where('')
    // 	$this->display("Glod/goldproject");
    // }



    	



   }