<?php
namespace app\model;

use think\facade\Db;
use think\Model;

class User extends Model
{
     public $name = 'user';

     public  function test($condition = [['id','>',1]], $order = ['id'=>'asc']){
//         $result = Db::name('user')->where($condition)->order($order)->select();
//         return $result;
     }
}