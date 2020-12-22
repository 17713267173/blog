<?php
namespace app\web\controller;

use app\BaseController;
use think\facade\View;
use app\web\model\Admins;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE');
header('Access-Control-Max-Age: 1728000');

class Index extends BaseController
{
    public function index()
    {
        $res = Admins::select();
        return json($res);
    }
    public function mine()
    {
        $a = ['name'=>'aaa'];
        $b = ['name'=>'bbb'];
        View::assign('a',$a);
        View::assign('b',$b);
        return View::fetch();
    }
    public function base()
    {
        return View::fetch();
    }
}
