<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialiteUser;
use App\Models\Comment;
use DB;

class IndexController extends Controller
{

    /*
     * 后台首页
     * @return mixed
     */
    public function index()
    {
        $socialiteUserData=SocialiteUser::select('name','avatar','login_times','updated_at')
            ->orderBy('updated_at','desc')
            ->limit(5)
            ->get();
        $version=[
            'system'=>PHP_OS,
            'webServer'=>$_SERVER['SERVER_SOFTWARE']??'',
            'php'=>PHP_VERSION,
            'mysql'=>DB::connection()->getPdo()->query('select version();')->fetchColumn()
        ];
        $assign=compact('socialiteUserData','version');
        return view('admin.index.index',$assign);
    }

    /**
     * 更新代码
     */
    public function upgrade()
    {
        $data=file_get_contents('https://gitee.com/baijunyao/laravel-bjyblog/raw/master/config/bjyblog.php');
        preg_match('/v\\d+(\\.\\d){3}',$data,$version);
        $newVersion=$version[0];
        $oldVersion=config('sample.version');
    }

    public function test()
    {
        echo '& sample';
    }
}