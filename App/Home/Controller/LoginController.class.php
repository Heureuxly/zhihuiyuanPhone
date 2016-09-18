<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller {
    public function index(){

		
        $this->display();
        }



    public function information(){
            $this->display();
    	
    }
    public function regmobile(){
    	$this->display();
    }
    public function login(){

    	//登陆验证
       $user = $_POST['user'];
       $password = md5($_POST['password']);

        $result = M("Users")->where(array(
        		"user" => $user,
        		'password' => $password,
        	))->find();
        if($user == $result['user'] && $password == $result['password']){
        	$this->success('登录成功!',U('Login/index'));
            $_SESSION["vip"] = $result['vip'];
            $_SESSION["user"] = $user;
            $_SESSION["password"] = $result['password'];
        }else{
        	$this -> error('用户名或密码不正确!');
        } 
        }
    



    	



   }