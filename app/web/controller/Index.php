<?php
namespace app\web\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;
use app\web\model\Admins;

class Index extends BaseController
{
    public function index()
    {
        $one = new Admins();
//        $res = $one->get_admin();
//        $res = $one->get_list();
//        $res = $one->add_admin(['name'=>'朱七','phone'=>'12154587854','password'=>md5('321')]);
//        dd($res->id);
//        View::assign('adminer',$res->toArray());
//        return View::fetch();
    }
    public function mine()
    {
        $res = Db::name('admins')->select();
        dd($res);
        return View::fetch();
    }
    public function base()
    {
        return View::fetch();
    }
}
