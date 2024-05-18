<?php

namespace App\Utilities;

// LogBuilder version 1.0

interface LogBuilder{
    public function Info() : LogBuilder; //
    public function Warning() : LogBuilder; //
    public function LoginFailed(string $ip , string $user_id) : LogBuilder; //
    public function LoginSuccess(string $ip , string $user_id) : LogBuilder; //
    public function Deactivate(): LogBuilder; //
    public function Strategy(string $stg_id) : LogBuilder;
    public function Target(string $target_id) : LogBuilder;
    public function Plan(string $plan_id) : LogBuilder;
    public function Project(string $project_id) : LogBuilder;
    public function Activity(string $act_id) : LogBuilder;
    public function User(string $user_id) : LogBuilder;
    public function byUser(string $user_id) : LogBuilder; //
    public function Created(): LogBuilder;

    public function changeName(string $old_name, string $new_name) : LogBuilder;
    public function desc(string $old, string $new) : LogBuilder;
    public function fiscalYear(string $old , string $new) : LogBuilder;
    public function changeStrategy(string $old, string $new) : LogBuilder;
    public function type(string $oldname, string $newname) : LogBuilder;
    public function changePlan(string $old_plan, string $new_plan) : LogBuilder;
    
    public function executive(string $old , string $new) : LogBuilder;
    public function supervisor(string $old , string $new) : LogBuilder;
    public function advisor(string $old , string $new) : LogBuilder;
    public function projectHead(string $old , string $new) : LogBuilder;
   
    public function budgetSource(string $old , string $new) : LogBuilder;
    public function budgetType(string $old , string $new) : LogBuilder;
    public function ref(string $old , string $new) : LogBuilder;
    public function changeProject(string $old , string $new) : LogBuilder;
    public function changePassword() : LogBuilder;
    public function updateProfile() : LogBuilder;
    public function updateProgress() : LogBuilder;
    
    public function save():void; // 
    public function reset():void; //

}
