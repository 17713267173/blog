<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        // $result = Db::table('blog_user')->where('id', 1)->find();
        $result = Db::table('blog_user')->where('id', 1)->find();
        dump($result);
    }
}