<?php

namespace App\Utilities;

use Illuminate\Support\Str;
class UUID{


    public static function uuid($model = null){
        
        if(!$model)
        {
            return substr(Str::uuid(),0,8);
        }else{
            // for test
            // $uuid = 'e5e54c95';

            $uuid = substr(Str::uuid(),0,8);
            $res = $model::find($uuid);
            while(!is_null($res))
            {
                $uuid = substr(Str::uuid(),0,8);
                $res = $model::find($uuid);
            }
            return $uuid;
        }
    }
}

