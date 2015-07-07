<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
   public function index(){
     $Model =  D("User");
     // $Model->create();
     // $Model->name = '流年1';
     // $Model->add();
	 
     $a = $Model->select();
     var_dump($a);
    }
}