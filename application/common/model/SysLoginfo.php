<?php

namespace app\common\model;

use think\Model;

class SysLoginfo extends Model
{
    //批量删除日志
    public function batchDelLog($param){
        try{
            SysLoginfo::destroy($param);
            writelog('日志批量删除成功',200,'','','true');
            return ['code' => 200, 'data' => '', 'msg' => '批量删除成功'];
        }catch( PDOException $e){
            writelog('日志批量删除失败',100,'','','true');
            return ['code' => 100, 'data' => '', 'msg' => '批量删除失败'];
        }
    }

    //删除日志
    public function delLog($log_id)
    {
        try{
            $this->where('id', $log_id)->delete();
            writelog('日志【ID='.$log_id.'】删除成功',200,'','','true');
            return ['code' => 200, 'data' => '', 'msg' => '删除日志成功'];
        }catch( PDOException $e){
            writelog('日志【ID='.$log_id.'】删除失败',100,'','','true');
            return ['code' => 100, 'data' => '', 'msg' => '删除日志失败'];
        }
    }
}
