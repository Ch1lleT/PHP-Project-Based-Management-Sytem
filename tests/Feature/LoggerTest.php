<?php

namespace Tests\Feature;

use App\Utilities\Logger;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;


class LoggerTest extends TestCase
{
    public function test_file_exist_and_contain_some_init_text(): void
    {
        $curr_date = date('Y-m-d');

        $logger = new Logger();
        $logger->create_new_log_File($curr_date);

        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "Log for The Information System for Monitoring Strategic Plan, Operational Plan, and Budget of the National Institute of Metrology (NIMT)\nDate : $curr_date\n\n====================================================";
        
        $this->assertStringContainsString($expected,$content);
    }

    // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_logInFailed_must_use_with_type_warning():void
    {
        $logger = new Logger();
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $this->expectException(\Exception::class);
        $logger->LoginFailed($ip,$user_id);

    }

    public function test_LogInFailed_Logging_1():void
    {
        $logger = new Logger();
        $curr_date = (string) date("Y-m-d");
        $curr_time = (string) date("H:i:s");
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $logger->Warning()->LoginFailed($ip,$user_id)->save();

        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "$curr_time :\n"."\ttype : Warning\n";
        $expected = $expected."\tby : $user_id\n";
        $expected = $expected."\ton : Login\n";
        $expected = $expected."\tmessage : Login failed from $ip ,try to login in to $user_id.\n";

        $this->assertStringContainsString($expected,$content);
    }
    public function test_LogInFailed_Logging_2():void
    {
        $logger = new Logger();
        $curr_date = (string) date("Y-m-d");
        $curr_time = (string) date("H:i:s");
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $logger->Warning()->LoginFailed($ip,$user_id)->save();
        
        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "$curr_time :\n"."\ttype : Warning\n";
        $expected = $expected."\tby : $user_id\n";
        $expected = $expected."\ton : Login\n";
        $expected = $expected."\tmessage : Login failed from $ip ,try to login in to $user_id.\n";

        sleep(1);
        $logger->Warning()->LoginFailed($ip,$user_id)->save();
        
        $this->assertStringContainsString($expected,$content);
    }
    
}
