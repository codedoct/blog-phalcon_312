<?php

class UserController extends ControllerBase
{
    public function indexAction()
    {
    	$users = Users::find();
    	$this->view->title = "Phalcon - Users";
    	$this->view->users = $users;
    	// dd($users);
    }

    public function showAction($userId)
    {
    	$conditions = ['userId'=>$userId];
    	$user = Users::findFirst([
		    'conditions' => 'id=:userId:',
		    'bind' => $conditions,
		]);
    	$this->view->title = "Phalcon - User";
    	$this->view->user = $user;
    	// dd($users);
    }
}

