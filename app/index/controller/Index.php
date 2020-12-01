<?php
namespace app\index\controller;

use app\BaseController;
use app\model\User;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
         $result = Db::table('blog_user')->avg('age');
         dd($result);
    }
}
