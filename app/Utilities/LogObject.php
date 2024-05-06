<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Storage;

// LogObject Version 0.1 

class LogObject{
    private string $time;
    public string $by ;
    public $type ;
    public $on ;
    public $message ;
    

    public function __construct(){
        $this->by = "System";
    }

    public function __toString() : string {

        if(!isset($this->time))
        {
            $curr_time = (string)date("H:i:s");
            $str = $curr_time." :\n";
        }else{
            $str = $this->time." :\n";
        }


        $str = $str."\ttype : ".$this->type."\n";
        $str = $str."\tby : ".$this->by."\n";
        $str = $str."\ton : ".$this->on."\n";
        $str = $str."\tmessage : ".$this->message."\n";
        
        return $str;
    }
    
    public function settime(string $time){
        $this->time = $time;
    }
}