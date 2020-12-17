<?php
namespace app\web\model;

use  think\Model;
use think\model\concern\SoftDelete;

class Admins extends Model{
    //    软删除
    use SoftDelete;
    protected $deleteTime = 'delete_time';
//    protected $defaultSoftDelete = 0;
    //    如果主键名不是id，则需要设置主键名
    protected $pk = 'uid';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function get_admin(){
        $find = Admins::where('name','李四')->find();
        if (empty($find)){
            echo 111;
        }else{
            echo 222;
        }
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
        return Admins::save($req);
    }
    public function update_admin(){
        $one = Admins::where(['name'=>'纳兰'])->find();
        $b = $one->toArray();
        $b['name'] = '4';
        $one->save($b);
    }
    public function detele_admin(){

    }
}