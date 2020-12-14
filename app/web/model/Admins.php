<?php
namespace app\web\model;

use  think\Model;

class Admins extends Model{
    public function get_admin(){
        $find = Admins::find(1);
        return $find;
    }
    public  function get_list(){
        $lists = Admins::select();
        return $lists;
    }
    public function add_admin($req){
        if(empty($req)){
            dd('数据不能为空');
            return;
        };
        return Admins::create($req);
    }
    public function update_admin($req){
        if(empty($req)){
            dd('数据不能为空');
            return;
        };
        return Admins::save($req);
    }
    public function detele_admin(){

    }
}