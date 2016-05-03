<?php
namespace MainBundle;

use Core\Controller;

class DefaultController extends Controller {

	public function index() {
		$this->render('index' ,array());
		exit;
	}

  public function submitsuccess(){
    $this->render('submitsuccess' ,array());
    exit;
  }

}
