<?php
namespace MainBundle;

use Core\Controller;
use Lib\DatabaseAPI;

class DefaultController extends Controller {

	public function index() {
		$this->render('index' ,array());
		exit;
	}

  public function submitsuccess(){
    $this->render('submitsuccess' ,array());
    exit;
  }

	public function datasubmit(){
		$data = $this->infosubmit();
		$response = $this->Response();
		$response->dataPrint($data);
	}

// sub function
	public function infosubmit(){
		if(isset($_SESSION['useid']))
			return array('code' => '8'); /*already submit*/
		$request = $this->Request();
		$data = array(
			array('key' => 'title' ,'type'=> 'post' ,'regtype'=> 'text'),
			array('key' => 'firstname' ,'type'=> 'post' ,'regtype'=> 'text'),
			array('key' => 'lastname' ,'type'=> 'post' ,'regtype'=> 'text'),
			array('key' => 'mobile' ,'type'=> 'post' ,'regtype'=> 'telphone'),
			array('key' => 'email' ,'type'=> 'post' ,'regtype'=> 'email'),
			array('key' => 'city' ,'type'=> 'post' ,'regtype'=> 'text'),
			array('key' => 'getmsg' ,'type'=> 'post' ,'regtype'=> 'number'),
		);
		if(!$keys = $request->comfirmKeys($data))
			return array('code' => '11'); /*data formate error*/
		$keys['useid'] = uniqid();
		$sql = new DatabaseAPI();
		if($sql->insertUser($keys)){
			$_SESSION['useid'] = $keys['useid'];
			return array('code' => '10'); /*submit success*/
		}
		return array('code' => '9'); /*submit error*/
	}

}
