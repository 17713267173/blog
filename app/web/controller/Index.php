<?php
namespace app\web\controller;

use app\BaseController;
use think\facade\View;
use app\web\model\Admins;

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
