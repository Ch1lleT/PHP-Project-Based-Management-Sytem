<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Storage;

// LogObject Version 1.0
use Illuminate\Support\Carbon;
use JsonSerializable;

class LogObject implements JsonSerializable{
    private string $time;
    public $type ;
    public string $by ;
    public $on ;
    public $message ;
    

    public function __construct(){
        $this->by = "System";
    }

    public function __toString() : string {

        if(!isset($this->time))
        {
            $curr_time = Carbon::now()->format('H:i:s');
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

    public static function to_log(string $log_string) : LogObject
    {
        $pattern = "/ : /";
        $log = new LogObject();
        
        $log_string = preg_split("/\n/",$log_string);
        
        $log->settime(str_replace(" : ","",$log_string[0]));
        $log->type = preg_split($pattern,$log_string[1],2)[1];
        $log->by = preg_split($pattern,$log_string[2],2)[1];
        $log->on = preg_split($pattern,$log_string[3],2)[1];
        $log->message = preg_split($pattern,$log_string[4],2)[1];

        return $log;
    }

    public function jsonSerialize()
    {
        return [
            'time' => $this->time,
            'type' => $this->type,
            'by' => $this->by,
            'on' => $this->on,
            'message' => $this->message,
        ];
    }


}