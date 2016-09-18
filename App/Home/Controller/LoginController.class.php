<?php
namespace Home\Controller;

use Think\Controller;


use Think\Upload;

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
        	$this->success('登录成功!',U('Index/index'));
            $_SESSION["vip"] = $result['vip'];
            $_SESSION["user"] = $user;
            $_SESSION["password"] = $result['password'];
        }else{
        	$this -> error('用户名或密码不正确!');
        } 
        }



    public function zhuce(){
         //头像上传
        $upload = new Upload(); //实例化上传类
        $upload->maxSize = 1000000; //设置上传大小，字节
        $upload->exts =  array('jpg','gif','png','jpeg'); //限定后缀
        $upload->savePath = './'; //在根目录Uploads下
        $upload->autoSub = false;//不设置子目录
        $info = $upload->upload(); //执行上传方法
       
        if (!$info) {
            $this->error($upload->getError()); //错误了
        } 



       
        

        // //添加新用户
        //  $ziliao = $_POST['ziliao'];
        //  $result = M('Users')->where(array(
                
        //             "user" => $ziliao.['user'],
        //              "sex" => $ziliao.['sex'],
        //            "phone" => $ziliao.['phone'],
        //            "email" => $ziliao.['email'],
        //         "password" => $ziliao.['password'],


        //                     ))->add();
        //  $img = M('teacher')->where(array(
        //             "img" => $ziliao.['img'],
        //     ))->add();

            //提交注册信息
                    $data = array(
                        'user' => I('post.user'),
                        'password' => MD5(I('post.password')),
                        'sex' => I('post.sex'),
                        'email' => I('post.email'),
                        'phone' => I('post.phone'),
                        'createtime' => date('Y-m-d H-i-s'),
                        'tid' => $tid['id'] + 1,
                        );

                        
                        $uid=M('Users')->add($data);
                        $date['id'] = $uid;
                        $face = M('teacher')->add($date);

                    if ($uid && $face) {
                        $this->success('注册成功!',U('Index/index'));
                    } else {
                        $this->error("提交数据失败");
                    }

    }
    



    	



   }