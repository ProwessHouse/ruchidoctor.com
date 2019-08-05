<?php
namespace app\controllers;
use lithium\storage\Session;
use app\extensions\action\Functions;

use app\models\Users;

class RegisterController extends \lithium\action\Controller {
	protected function _init(){
		parent::_init();
	}
	public function index(){}

	public function newuser(){
		$message = $this->request->data;
		$function = new Functions();
		$function->sendEmailTo($message['email'],$message,'register','newuser','New Register','support@ruchidoctor.com',MAIL_1,MAIL_2,null,null);
		Users::create()->save($message);
		return $this->render(array('layout' => false));
	}
}
?>