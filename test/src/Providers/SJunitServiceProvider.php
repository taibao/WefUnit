<?php
namespace Unit\Test\Providers;

//集成服务提供者基类
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/*
 * 这是单元测试组件的服务提供者
 * 用以加载junit
 *
 * */
class SJunitServiceProvider extends ServiceProvider{

	public function register(){
	    //echo ‘这是sjunit服务提供者’
        // 注册组件路由
		$this->registerRoutes();
		//加载视图
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit'
        );
	}

	public function boot()
	{

	}

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            //定义访问路由的域名
            //'domain' => config('telescope.domain', null),
            //是定义路由的命令
            'namespace' => 'Unit\Test\Http\Controllers',
            //这是前缀
            'prefix' => "sjunit",
            //这是中间件
            'middleware' => 'web',
        ];
    }

}