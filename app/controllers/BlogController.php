<?php
namespace app\controllers;
use lithium\storage\Session;
use app\extensions\action\Functions;

use app\models\Users;
use app\models\Posts;
use app\models\Authors;
use app\models\Comments;

class BlogController extends \lithium\action\Controller {

	public function index(){
		$blogs = Posts::find('all',
			array(
				'order'=>array('Name',array('ASC'=>1))
			));
		
		return compact('blogs');
	
	}
	public function create(){
		if ($this->request->data){
			$data = array(
				'DateTime'=> new \MongoDate(),
				'Title'=>$this->request->data['Title'],
				'SubTitle'=>$this->request->data['SubTitle'],
				'Content'=>$this->request->data['Content'],
				'Status'=>$this->request->data['Status'],
				'Category'=>$this->request->data['Category'],
				'KeyWords'=>$this->request->data['KeyWords'],
				'Author_id'=>$this->request->data['Author_id'],
				'LikeCount'=>0,
				'CommentCount'=>0,
			);
			
			Posts::create()->save($data);
			$Post = "Yes";
		}
		$authors = Authors::find('all',
			array(
				'order'=>array('Name',array('ASC'=>1))
			)
		);
		return compact('Post','authors');
	}
	public function edit(){
		$blogs = Posts::find('all',
			array(
				'order'=>array('Name',array('ASC'=>1))
			));
		return compact('blogs');
		
	}
	public function post($_id=null){
		$blog = Posts::find('first',
			array(
				'conditions'=>array('_id'=>$_id),
			));
		$authors = Authors::find('all',
			array(
				'order'=>array('Name',array('ASC'=>1))
			)
		);
		return compact('blog','authors');
	}
	public function publish($_id=null,$status=null){
		$conditions = array('_id'=>(string)$_id);
		$data = array('Status'=>$status);
		Posts::update($data, $conditions);
		$this->redirect('/blog/edit');
	}
	public function deletepost($_id=null){
		$conditions = array('_id'=>$_id);
		Posts::remove($conditions);
		
		$this->redirect('/blog/edit');
	}
	public function v($title=null,$_id=null){
		$blog = Posts::find('first',array(
			'conditions'=>array('_id'=>$_id)
		));
		$blogs = Posts::find('all',array(
//			'order'=>array('DateTime'=>array('DESC'=>1))
		));

		return compact('blog','blogs');
	}
	public function update(){
		if ($this->request->data){
			$data = array(
				'DateTime'=> new \MongoDate(),
				'Title'=>$this->request->data['Title'],
				'SubTitle'=>$this->request->data['SubTitle'],
				'Content'=>$this->request->data['Content'],
				'Status'=>$this->request->data['Status'],
				'Category'=>$this->request->data['Category'],
				'KeyWords'=>$this->request->data['KeyWords'],
				'Author_id'=>$this->request->data['Author_id'],
				'LikeCount'=>$this->request->data['LikeCount'],
				'CommentCount'=>$this->request->data['CommentCount'],
			);
			$conditions = array('_id'=>$this->request->data['_id']);
			Posts::update($data, $conditions);
			$Post = "Yes";
		}
		$authors = Authors::find('all',
			array(
				'order'=>array('Name',array('ASC'=>1))
			)
		);
			$blogs = Posts::find('all',
			array(
				'conditions'=>array('_id'=>$this->request->data['_id']),
			));
		
		return compact('Post','authors','blogs');
		
	}
}
?>