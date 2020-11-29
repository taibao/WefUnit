<?php
namespace VitasDev\WefUnit\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SJunitController extends Controller
{

	public function index()
	{
		return view("sjunit::index"); //参数传递未知
	}


	public function store(Request $request)
	{
		//用反射法创建实例类,缓存记录
		$namespace = $request->input('namespace');
		$className = $request->input('className');
		$action    = $request->input('action');
		$param     = $request->input('param');

		$class = ($className == "") ? $namespace : $namespace.'\\'.$className;
		//要替换的值，需要的结束

		$class = str_replace("/","\\",$class);
		$object = new $class(); //创建实际的类
		$param = ($param == "") ? [] : explode('|',$param);//参数的处理
		$data = call_user_func_array([$object,$action],$param); //最终执行
		return (is_array($data)) ? json_encode($data) : dd($data);
	}
}