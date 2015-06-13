<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
   public function index(){
      $data = array(
      'asdf' => 1,'dfg' => 2,'asdfrg' => 3,'yhnfd' => 4,'bfws' => 1
    );
    $this->assign('test',$data);
    $this->display();
    }
    
}