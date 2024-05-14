<?php

namespace Tests\Feature;

use App\Utilities\Logger;


use Tests\TestCase;

class Logger_Created_Test extends TestCase
{
   public function test_startegy_created(){
        $logger = new Logger();
        $logger->Info()->Strategy('001')->Created()->byUser('001')->save();
   
        $logs = Logger::ReadLog();        
    }
}
