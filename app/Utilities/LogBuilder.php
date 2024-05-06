<?php

namespace App\Utilities;

// LogBuilder version 0.1

interface LogBuilder{
    public function Info() : LogBuilder;
    public function Warning() : LogBuilder;
    public function byUser() : LogBuilder;
    public function LoginFailed(string $ip , string $user_id) : LogBuilder;
    public function onStrategy() : LogBuilder;
    // public function onProject() : LogBuilder;
    // public function onActivity() : LogBuilder;
    public function save():void;
    public function reset():void;

}
