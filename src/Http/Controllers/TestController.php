<?php
	namespace VitasDev\WefUnit\Http\Controllers;
	use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

	class TestController extends Controller{
		 public function index($params1="",$params2="",$params3=""){
			return "单元测试成功了"."参数一：".$params1."参数二：".$params2."参数三：".$params3;
		 }
	}