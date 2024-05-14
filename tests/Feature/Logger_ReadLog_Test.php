<?php

namespace Tests\Feature;

use App\Utilities\Logger;
use App\Utilities\LogObject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;
use Illuminate\Support\Carbon;

class Logger_ReadLog_Test extends TestCase
{
    
    public function test_logger_readlog_current_date(): void
    {

        $current_time = Carbon::now()->format('H:i:s');
        $logs = Logger::ReadLog();
        $log = $logs[0];
    
        $this->assertIsArray($logs);
        $this->assertCount(4,$logs);
        $this->assertInstanceOf(LogObject::class,$logs[0]);
        $this->assertEquals("Warning",$log->type);
        $this->assertEquals("System",$log->by);
        $this->assertEquals("Login",$log->on);
        $this->assertEquals("Login failed from 127.0.0.1 ,try to login in to 01.",$log->message);
    }

    public function test_logger_readlog_specific_date(): void
    {

        $current_time = Carbon::now()->format('H:i:s');
        $current_date = Carbon::today()->toDateString();
        $logs = Logger::ReadLog($current_date);
        $log = $logs[0];
    
        $this->assertIsArray($logs);
        $this->assertCount(4,$logs);
        $this->assertInstanceOf(LogObject::class,$logs[0]);
        $this->assertEquals("Warning",$log->type);
        $this->assertEquals("System",$log->by);
        $this->assertEquals("Login",$log->on);
        $this->assertEquals("Login failed from 127.0.0.1 ,try to login in to 01.",$log->message);
    }
    
}
