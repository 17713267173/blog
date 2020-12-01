<?php
namespace app\model;

use think\Model;

class User extends Model
{
     public $name = 'user';

     public  function test(){
         return $this->name;
     }
}