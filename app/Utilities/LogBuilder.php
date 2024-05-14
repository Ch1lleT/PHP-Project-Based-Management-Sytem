<?php

namespace App\Utilities;

// LogBuilder version 0.1

interface LogBuilder{
    public function Info() : LogBuilder; //
    public function Warning() : LogBuilder; //
    public function LoginFailed(string $ip , string $user_id) : LogBuilder; //
    public function LoginSuccess(string $ip , string $user_id) : LogBuilder; //
    public function Delete(): LogBuilder; 
    public function Strategy(string $stg_id) : LogBuilder;
    public function Target() : LogBuilder;
    public function Plan() : LogBuilder;
    public function Project() : LogBuilder;
    public function Activity() : LogBuilder;
    public function User() : LogBuilder;
    public function byUser() : LogBuilder;
    public function Created(): LogBuilder;
    public function edited(): LogBuilder;
    public function save():void;
    public function reset():void;

}
