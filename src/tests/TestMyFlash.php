<?php
namespace LaravelChen\MyFlash;

use PHPUnit\Framework\TestCase;

class TestMyFlash extends TestCase
{
    public $myflash;

    public function setUp()
    {
        $this->myflash = new FlashNotifiy();
    }

    public function testsuccess()
    {
        $this->myflash->success('Hello');
        $this->assertEquals(Session::get('myflash.message'), 'Hello');
    }

    public function testerror()
    {
        $this->myflash->error('Hello');
        $this->assertEquals(Session::get('myflash.message'), 'Hello');
    }

    public function testinfo()
    {
        $this->myflash->info('Hello');
        $this->assertEquals(Session::get('myflash.message'), 'Hello');
    }

    public function testwarning()
    {
        $this->myflash->warning('Hello');
        $this->assertEquals(Session::get('myflash.message'), 'Hello');
    }
}