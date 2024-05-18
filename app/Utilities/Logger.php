<?php

namespace App\Utilities;

use App\Utilities\LogObject;
use App\Utilities\LogBuilder;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Storage;

// Logger Version 1.0

class Logger implements LogBuilder { 

    protected LogObject $LogObject;
    protected $builded_Log = "";

    protected $allow_created_edited = ["Strategy","Target","Plan","Project","Activity","User"];
    protected $changeName_allow =["Strategy","Target","Plan","Project" ,"Activity"];
    protected $changeStrategy_allow = ["Plan","Target"];
    protected $desc_allow = ["Strategy","Plan","Project","Activity"];

    public function __construct(){
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
    
    public function byUser(string $user_id) : LogBuilder{
        // $this->LogObject->by = auth()->user->first_name." ".auth()->user->last_name;
        $this->LogObject->by = $user_id;
        $this->LogObject->message = $this->LogObject->message." by ".$user_id; 
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
    
    public function Deactivate(): LogBuilder{
        if($this->LogObject->type != "Warning"){
            throw new \Exception("Deactivate must use with log type Warning only!");
        }
        $this->LogObject->type = "Deactivate"; 
        return $this;
    }
    
    public function Strategy(string $stg_id) : LogBuilder{
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            
            if(isset($stg_id))
            {
                $this->LogObject->message = "Strategy $stg_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate strategy must provide stg_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
                
            $this->LogObject->on = "Strategy";
            $this->LogObject->message = "Strategy $stg_id";

        }else{
            throw new \Exception("Strategy must use with Deactivate or log type Info");
        }

        return $this;
    }
    
    public function Target(string $target_id) : LogBuilder{
        
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            
            if(isset($target_id))
            {
                $this->LogObject->message = "Target $target_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate traget must provide target_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
            $this->LogObject->on = "Target";
            $this->LogObject->message = "Traget $target_id";

        }else{
            throw new \Exception("Traget must use with Deactivate or log type Info");
        }


        return $this;
    }

    public function Plan(string $plan_id) : LogBuilder{
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            
            if(isset($plan_id))
            {
                $this->LogObject->message = "Plan $plan_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate plan must provide plan_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
            $this->LogObject->on = "Plan";
            $this->LogObject->message = "Plan $plan_id";

        }else{
            throw new \Exception("Plan must use with Deactivate or log type Info");
        }

        return $this;
    }
    
    public function Project(string $project_id) : LogBuilder{
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            
            if(isset($project_id))
            {
                $this->LogObject->message = "Project $project_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate Project must provide project_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
            $this->LogObject->on = "Project";
            $this->LogObject->message = "Project $project_id";

        }else{
            throw new \Exception("Project must use with Deactivate or log type Info");
        }

        return $this;
    }
    
    public function Activity(string $act_id) : LogBuilder{
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            
            if(isset($act_id))
            {
                $this->LogObject->message = "Activity $act_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate activity must provide act_id as string");
            }         
        
        }
        elseif($this->LogObject->type == "Info"){
            $this->LogObject->on = "Activity";
            $this->LogObject->message = "Activity $act_id";

        }else{
            throw new \Exception("Activity must use with Deactivate or log type Info");
        }

        return $this;
    }
    
    public function User(string $user_id) : LogBuilder{
        if($this->LogObject->on == "Deactivate" && $this->LogObject->type == "Warning"){
            if(isset($user_id))
            {
                $this->LogObject->message = "User $user_id has been deactivated";
            }else{
                throw new \Exception("When Deactivate User must provide user_id as string");
            }         
        }elseif($this->LogObject->type == "Info"){
            
            $this->LogObject->on = "User";
            $this->LogObject->message = "User $user_id";

        }else{
            throw new \Exception("User must use with Deactivate or log type Info");
        }

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
            throw new \Exception("Created must use withs : ".implode(',',$this->allow_created_edited));
        }

        return $this;
    }

    public function fiscalYear(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on,["Strategy"]))
        {
            $msg = $this->LogObject->message ;
            $this->LogObject->message = $msg."has change fiscal yeaer from \"$old\" to \"$new\""; 
        }else{
            throw new \Exception("Created must use withs : ".implode(',',$this->allow_created_edited));
        }

        return $this;
    }

    public function changeName(string $old_name, string $new_name) : LogBuilder{
        if(in_array($this->LogObject->on,$this->changeName_allow))
        {
            $this->LogObject->message .= "rename from \"$old_name\" to \"$new_name\"";
        }else{
            throw new \Exception("changeName only allow to use with ".implode(',',$this->changeName_allow));
        }
        return $this;
    }

    public function desc(string $old, string $new): LogBuilder{
        if(in_array($this->LogObject->on,$this->desc_allow))
        {
            $this->LogObject->message .= "has change description to from \"$old\" to \"$new\" ";
        }else{
            throw new \Exception("desc only allow to use with ".implode(',',$this->desc_allow));
        }     

        return $this;
    }

    public function changeStrategy(string $old, string $new) : LogBuilder{
        
        if(in_array($this->LogObject->on,$this->changeStrategy_allow))
        {
            $this->LogObject->message .= "has change strategy from \"$old\" to \"$new\" ";
        }else{
            throw new \Exception("changeStrategy only allow to use with ".implode(',',$this->changeStrategy_allow));
        }
        
        return $this;
    }

    public function changeProject(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on,["Activity"]))
        {
            $this->LogObject->message .= "has change project from \"$old\" to \"$new\" ";
        }else{
            throw new \Exception("changeProject only allow to use with Activity only");
        }

        return $this;
    }

    public function ref(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on,["Activity"]))
        {
            $this->LogObject->message .= "has change act_ref from \"$old\" to \"$new\" ";
        }else{
            throw new \Exception("ref only allow to use with Activity only");
        }
        return $this;
    }

    public function updateProgress() : LogBuilder{
        if(in_array($this->LogObject->on,["Activity"]))
        {
            $this->LogObject->message .= "has updated";
        }else{
            throw new \Exception("updateProgress only allow to use with Activity only");
        }
        return $this;
    }

    public function changePlan(string $old_plan, string $new_plan) : LogBuilder{
        if(in_array($this->LogObject->on,["Project"]))
        {
            $this->LogObject->message .= "has change project from \"$old_plan\" to \"$new_plan\" ";
        }else{
            throw new \Exception("changePlan only allow to use with Project only");
        }

        return $this;
    }

    public function executive(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on , ["Project"])){
            $this->LogObject->message .= "has change executive from \"$old\" to \"$new\"";
        }else{
            throw new \Exception("executive only allow to use with Project only");
        }
        return $this;        
    }

    public function supervisor(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on , ["Project"])){
            $this->LogObject->message .= "has change supervisor from \"$old\" to \"$new\"";
        }else{
            throw new \Exception("supervisor only allow to use with Project only");
        }
        return $this;
    }

    public function advisor(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on , ["Project"])){
            $this->LogObject->message .= "has change advisor from \"$old\" to \"$new\"";
        }else{
            throw new \Exception("advisor only allow to use with Project only");

        }
        return $this;
    }

    public function projectHead(string $old , string $new) : LogBuilder{
        if(in_array($this->LogObject->on , ["Project"])){
            $this->LogObject->message .= "has change projectHead from \"$old\" to \"$new\"";
        }else{
            throw new \Exception("projectHead only allow to use with Project only");
        }
        return $this;
    }
    

    public function budgetSource(string $old , string $new) : LogBuilder{
        throw new \Exception("budgetSource not implement yet");
        return $this;
    }

    public function budgetType(string $old , string $new) : LogBuilder{
        throw new \Exception("budgetType not implement yet");
        return $this;
    }
    
    
    public function type(string $oldname, string $newname) : LogBuilder{
        throw new \Exception("type not implement yet");
        return $this;
    }
    

    public function changePassword() : LogBuilder{
        if(in_array($this->LogObject->on , ["User"])){
            $this->LogObject->message .= "have change password";
        }else{
            throw new \Exception("changePassword only allow to use with User only");
        }
        return $this;
    }

    public function updateProfile() : LogBuilder{
        if(in_array($this->LogObject->on , ["User"])){
            $this->LogObject->message .= "have update user's profile";
        }else{
            throw new \Exception("updateProfile only allow to use with User only");
        }
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
            
            $content = Storage::disk('log')->get($log_date.".log");
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


