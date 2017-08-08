<?php

class UserController extends ControllerBase
{
    public function readAction()
    {
    	$users = Users::find();
    	$this->view->title = "Phalcon - User";
    	$this->view->users = $users;
    	// dd($users);
    }
}

