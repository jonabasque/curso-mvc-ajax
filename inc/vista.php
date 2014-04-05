<?php
require('libs/smarty/Smarty.class.php');

class vista{

	public $smarty;
	
	public function __construct() {
		$this->smarty = new Smarty;
		$this->smarty->force_compile = true;
		$this->smarty->debugging = true;
		$this->smarty->caching = false;
		//$this->smarty->cache_lifetime = 120;
	}
	
	public function pasa_vista($nombre,$valor) {
		$this->smarty->assign($nombre,$valor,true);
	}

	public function display($index) {
		$this->smarty->display($index);
	}



}