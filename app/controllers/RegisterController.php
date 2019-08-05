<?php
namespace app\controllers;
use lithium\storage\Session;
use app\models\Users;

class RegisterController extends \lithium\action\Controller {
	protected function _init(){
		parent::_init();
	}
	public function index(){}

	public function newuser(){
		$message = $this->request->data;
		
		Users::create()->save($message);
		return $this->render(array('layout' => false));
	}
}
?>