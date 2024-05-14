<?php

namespace Tests\Feature;

use App\Utilities\Logger;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;
use Illuminate\Support\Carbon;

class Logger_Strategy_Test extends TestCase
{
    public function no_test_strategy_created_byUser(): void
    {
        $curr_date = Carbon::today()->toDateString();
        $logger = new Logger();


        $logger->Info()->Strategy('1')->Created()->byUser();

        $content = Storage::disk('log')->get($curr_date.'.log');
        
        $expected = "Log for The Information System for Monitoring Strategic Plan, Operational Plan, and Budget of the National Institute of Metrology (NIMT)\nDate : $curr_date\n\n====================================================";
        
        $this->assertStringContainsString($expected,$content);
    }

    // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    // public function test_logInFailed_must_use_with_type_warning():void
    // {
    //     $logger = new Logger();
    //     $ip = "127.0.0.1";
    //     $user_id = '01';
        
    //     $this->expectException(\Exception::class);
    //     $logger->LoginFailed($ip,$user_id);

    // }
    
    
}
