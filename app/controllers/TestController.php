<?php

class TestController extends ControllerBase
{
    public function testAction()
    {
    	$users = ['aan', 'hei', 'lala'];
    	$genders = [
    		'LK' => 'Laki-laki',
    		'PR' => 'Perempuan'
    	];
        $data['users'] = $users;
        $data['genders'] = $genders;
        dd($data);
    	$this->view->data = $data;
    	$this->view->title = "Phalcon - User";
    }
}

