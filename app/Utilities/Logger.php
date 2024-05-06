<?php

namespace App\Utilities;

use App\Utilities\LogObject;
use App\Utilities\LogBuilder;
use Illuminate\Support\Facades\Storage;

// Logger Version 0.1

class Logger implements LogBuilder { 

    protected LogObject $LogObject;
    protected $builded_Log = "";

    protected $type_allow = ["Info","Warning"];

    public function __construct()
    {
        $this->LogObject = new LogObject(); 
    }

    public function Warning() : LogBuilder {
        $this->LogObject->type = "Warning";
        return $this;
    }

    public function Info() : LogBuilder{
        $this->LogObject->type = "Info";
        return $this;
    }

    public function byUser() : LogBuilder{
        // $this->LogObject->by = auth()->user->first_name." ".auth()->user->last_name;
        $this->LogObject->by = auth()->user_id;
        return $this;
    }

    public function LoginFailed(string $ip , string $user_id) : LogBuilder{
        
        if($this->LogObject->type != "Warning"){
            throw new \Exception("LoginFailed must use with log type Warning only!");
        }

        $this->LogObject->by = $user_id;
        $this->LogObject->on = "Login";
        $this->LogObject->message = "Login failed from $ip ,try to login in to $user_id.";
        return $this;
    }
    
    public function onStrategy() : LogBuilder{
        $this->LogObject->on = "Strategy";
        return $this;
    }
    
    public function save() : void {
        $curr_date = (string)date('Y-m-d');
        if(!$this->IsTodayExist()) 
        {
            $this->create_new_log_File($curr_date);
        }

        $this->build();

        Storage::disk("log")->append($curr_date.".log",$this->builded_Log);

        
    }

    private function IsTodayExist() : bool {
        return Storage::disk("log")->exists(((string)date('Y-m-d')).'.log');
    }  
    
    public function create_new_log_File(string $curr_date) : void {
        $init_log_text ="Log for The Information System for Monitoring Strategic Plan, Operational Plan, and Budget of the National Institute of Metrology (NIMT)\nDate : $curr_date\n\n====================================================";
        Storage::disk("log")->put($curr_date.".log",$init_log_text);
    }

    private function build(){
        $this->builded_Log = $this->LogObject->__toString();
    }

    public function reset():void{
        $this->LogObject = new LogObject();
        $this->builded_Log = "";
    }

    public function getLog(){
        return $this->builded_Log;
    }


}


