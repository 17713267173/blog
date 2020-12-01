<?php
namespace app\index\controller;

use app\BaseController;
use app\model\User;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
         $result = Db::name('user')->page(1,2)->select();
         dd($result);
    }
}
