<?php

namespace Tests\Feature;

use App\Utilities\Logger;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;
use Illuminate\Support\Carbon;

class Logger_Login_Test extends TestCase
{
    public function test_file_exist_and_contain_some_init_text(): void
    {
        $curr_date = Carbon::today()->toDateString();

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

    public function test_LogIn_failed_Logging_1():void
    {
        $logger = new Logger();
        $curr_date = Carbon::today()->toDateString();
        $curr_time = Carbon::now()->format('H:i:s');
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $logger->Warning()->LoginFailed($ip,$user_id)->save();

        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "$curr_time :\n"."\ttype : Warning\n";
        // $expected = $expected."\tby : $user_id\n";
        $expected = $expected."\tby : System\n";
        $expected = $expected."\ton : Login\n";
        $expected = $expected."\tmessage : Login failed from $ip ,try to login in to $user_id.\n";

        $this->assertStringContainsString($expected,$content);
    }
    
    public function test_LogIn_failed_Logging_2():void
    {
        $logger = new Logger();
        $curr_date = Carbon::today()->toDateString();
        $curr_time = Carbon::now()->format('H:i:s');
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $logger->Warning()->LoginFailed($ip,$user_id)->save();
        
        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "$curr_time :\n"."\ttype : Warning\n";
        // $expected = $expected."\tby : $user_id\n";
        $expected = $expected."\tby : System\n";
        $expected = $expected."\ton : Login\n";
        $expected = $expected."\tmessage : Login failed from $ip ,try to login in to $user_id.\n";

        sleep(1);
        $logger->Warning()->LoginFailed($ip,$user_id)->save();
        
        $this->assertStringContainsString($expected,$content);
    }
    
    public function test_LogInSuccess_must_use_with_info():void
    {
        $logger = new Logger();
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $this->expectException(\Exception::class);
        $logger->LoginSuccess($ip,$user_id);
    }

    public function test_LogIn_Success_Logging():void
    {
        $logger = new Logger();
        $curr_date = Carbon::today()->toDateString();
        $curr_time = Carbon::now()->format('H:i:s');
        $ip = "127.0.0.1";
        $user_id = '01';
        
        $logger->Info()->LoginSuccess($ip,$user_id)->save();
        
        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "$curr_time :\n"."\ttype : Info\n";
        // $expected = $expected."\tby : $user_id\n";
        $expected = $expected."\tby : System\n";
        $expected = $expected."\ton : Login\n";
        $expected = $expected."\tmessage : User $user_id has login from $ip\n";
               
        $this->assertStringContainsString($expected,$content);
    }

    
    
}
