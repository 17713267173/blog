<?php
namespace app\web\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return View::fetch();
    }
    public function mine()
    {
        return View::fetch();
    }
    public function base()
    {
        return View::fetch();
    }
}
