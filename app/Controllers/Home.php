<?php namespace App\Controllers;

use System\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return $this->view->render('default');
    }
    public function mykolas()
    {
    	return $this->view->render('mykolas');
    }
}
