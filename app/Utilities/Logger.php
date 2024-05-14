<?php

namespace App\Utilities;

use App\Utilities\LogObject;
use App\Utilities\LogBuilder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

// Logger Version 0.1

class Logger implements LogBuilder { 

    protected LogObject $LogObject;
    protected $builded_Log = "";

    protected $type_allow = ["Info","Warning"];
    protected $allow_created_edited = ["Strategy","Target","Plan","Project","Activity","User"];

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
        $this->LogObject->by = auth()->user()->user_id;
        $this->LogObject->message = $this->LogObject->message." by ".auth()->user()->user_id; 
        return $this;
    }

    public function LoginFailed(string $ip , string $user_id) : LogBuilder{
        
        if($this->LogObject->type != "Warning"){
            throw new \Exception("LoginFailed must use with log type Warning only!");
        }

        // $this->LogObject->by = $user_id;
        $this->LogObject->on = "Login";
        $this->LogObject->message = "Login failed from $ip ,try to login in to $user_id.";
        return $this;
    }
    public function LoginSuccess(string $ip , string $user_id) : LogBuilder{
        
        if($this->LogObject->type != "Info"){
            throw new \Exception("LoginSuccess must use with log type Info only!");
        }
        
        // $this->LogObject->by = $user_id;
        $this->LogObject->on = "Login";
        $this->LogObject->message = "User $user_id has login from $ip";
        return $this;
    }
    
    public function Delete(): LogBuilder{
        if($this->LogObject->type != "Warning"){
            throw new \Exception("Delete must use with log type Warning only!");
        }
        $this->LogObject->type = "Delete"; 
        return $this;
    }
    
    public function Strategy(string $stg_id) : LogBuilder{
        if($this->LogObject->on == "Delete" && $this->LogObject->type == "Warning"){
            
            if(isset($stg_id))
            {
                $this->LogObject->message = "Strategy $stg_id has been deleted";
            }else{
                throw new \Exception("When delete strategy must provide stg_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
                
            $this->LogObject->message = "Strategy $stg_id";

        }else{
            throw new \Exception("Strategy must use with Delete or log type Info");
        }

        return $this;
    }
    
    public function Target() : LogBuilder{
        
        return $this;
    }

    public function Plan() : LogBuilder{
        
        return $this;
    }
    
    public function Project() : LogBuilder{
        
        return $this;
    }
    
    public function Activity() : LogBuilder{
        
        return $this;
    }
    
    public function User() : LogBuilder{
        
        return $this;
    }

    
    public function save() : void {
        $curr_date = Carbon::today()->toDateString();
        if(!$this->IsTodayExist()) 
        {
            $this->create_new_log_File($curr_date);
        }

        $this->build();

        Storage::disk("log")->append($curr_date.".log",$this->builded_Log);

    }

    private static function IsTodayExist() : bool {
        return Storage::disk("log")->exists(Carbon::today()->toDateString().'.log');
    }  
    
    public function create_new_log_File(string $curr_date) : void {
        $init_log_text ="Log for The Information System for Monitoring Strategic Plan, Operational Plan, and Budget of the National Institute of Metrology (NIMT)\nDate : $curr_date\n\n====================================================";
        Storage::disk("log")->put($curr_date.".log",$init_log_text);
    }

    public function Created(): LogBuilder{

        if(in_array($this->LogObject->on,$this->allow_created_edited))
        {
            $msg = $this->LogObject->message ;
            $this->LogObject->message = $msg.' have been created'; 
        }else{
            throw new \Exception("Created must use withs : ".implode(',',$this->allow_created_edited)).'';
        }

        return $this;
    }
    
    public function edited(): LogBuilder{
        return $this;
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

    /**
     * Returns an array of LogObjects.
     *
     * @return LogObject[]
     */
    public static function ReadLog(string $log_date = null):array {
        $Logs = [];

        $content = "";

        if(is_null($log_date))
        {
            $curr_date = Carbon::today()->toDateString();
            if(Logger::IsTodayExist())
            {
                $content = Storage::disk('log')->get($curr_date.".log");
                $og_content = $content;
            }

        }else{
            
            $content = Storage::disk('log')->get($log_date);
        }

        try{
            
            $timestamp_pattern = "/".PHP_EOL."/";
            $logs_string = [];

            // seperate content into array line by line 
            $content = explode(PHP_EOL,$content);

            // remove Log file header
            $content = array_slice($content,1);
            
            // concat each string back to long string  
            $content = implode(PHP_EOL,$content);
            
            // seperate each log to array
            $logs_string = preg_split($timestamp_pattern, $content, -1, PREG_SPLIT_NO_EMPTY);
          
            
        }catch(\Exception $err ){
            echo $err;
        }
        
        // transform each log string to LogObject
        foreach($logs_string as $log)
        {
            array_push($Logs,LogObject::to_log($log));
        }
        

        return $Logs;
    } 

}


