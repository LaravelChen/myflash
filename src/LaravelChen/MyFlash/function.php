<?php
if(!function_exists('myflash')){
    function myflash($message=''){
        $notify=app('myflash');
        if(!is_null($message)){
            return $notify->success($message); //默认为success
        }
        return $notify;
    }
}
