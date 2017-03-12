<?php

namespace LaravelChen\MyFlash;
use Illuminate\Session\Store;

class FlashNotifiy
{
    public $session;

    public function __construct(Store $sesstion)
    {
        $this->session=$sesstion;
    }

    public function success($message)
    {
        return $this->message($message,'success');
    }

    public function error($message)
    {
        return $this->message($message,'error');
    }

    public function warning($message)
    {
        return $this->message($message,'warning');
    }

    public function info($message){
        return $this->message($message,'info');
    }

    public function message($message,$type)
    {
        $this->session->flash('myflash.message',$message);
        $this->session->flash('myflash.type',$type);
        return $this;
    }

}