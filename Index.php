<?php
	require_once  './vendor/autoload.php';
	use VitasDev\WefUnit\Http\Controllers\TestController;


	$u = new TestController();
	$u->index();

//	class Index{
//		 public function index(){
//		 	echo "unit/test";
//		 }
//	}