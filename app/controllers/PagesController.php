<?php

class PagesController extends BaseController{
	public function home(){
		return View::make('/home/home');
	}

	public function login(){
		return View::make('/home/login');
	}

	public function signin(){
		return View::make('/home/signin');
	}

	public function stock(){
		return View::make('/home/stock');
	}

	public function financial(){
		return View::make('/home/financial');
	}

	public function testt(){
		return View::make('/home/testframe');
	}
}

?>