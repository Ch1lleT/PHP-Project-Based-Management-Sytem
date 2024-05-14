<?php

namespace App\Utilities;

// LogBuilder version 0.2

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
    public function edited(): LogBuilder; 
    public function save():void; // 
    public function reset():void; //

}
