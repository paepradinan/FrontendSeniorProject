<?php

class PagesController extends BaseController{
    protected $layout = 'layouts.master';

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
    	return $this->layout->content = View::make('/home/stock', array('title' => 'STOCK'));
	}

	public function company(){
    	return $this->layout->content = View::make('/home/company', array('title' => 'COMPANY'));
	}

	public function financial(){
    	return $this->layout->content = View::make('/home/financial', array('title' => 'FINANCIAL'));
	}

	public function news(){
    	return $this->layout->content = View::make('/home/news', array('title' => 'NEWS'));
	}

	public function marketnews(){
    	return $this->layout->content = View::make('/home/marketnews', array('title' => 'MARKET NEWS'));
	}

	public function market(){
    	return $this->layout->content = View::make('/home/market', array('title' => 'MARKET'));
	}

	public function sector(){
    	return $this->layout->content = View::make('/home/sector', array('title' => 'sector'));
	}

	public function world(){
    	return $this->layout->content = View::make('/home/world', array('title' => 'world'));
	}

	public function testt(){
    	return $this->layout->content = View::make('/home/testframe', array('title' => 'ABA'));
	}

	public function master(){
		return View::make('/layouts/master');
	}
}

?>