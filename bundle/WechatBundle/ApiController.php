<?php
namespace WechatBundle;

use Core\Controller;


class ApiController extends Controller {

	public function test($a, $b) {
		$this->render('test', array('a'=>$a, 'b' =>$b));
		exit;
	}

}
