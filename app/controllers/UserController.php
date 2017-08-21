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

    public function createAction()
    {
        $this->view->title = "Phalcon - Create user";
    }

    public function saveAction()
    {
        $name = $this->request->get('name');
        $email = $this->request->get('email');
        $address = $this->request->get('address');

        $user = new Users();
        $user->name = $name;
        $user->email = $email;
        $user->address = $address;

        if ($this->request->isPost()) {
            if ($user->create()) {
                return $this->response->redirect('user');
            }
        } else {
            $this->flash->error('User form is not valid.');
        }
    }
}

