<?php

namespace App\Services;

use App\Contracts\CommonContract;

class CommonService implements CommonContract
{
    public function call($controller){
        return 'call'.$controller;
    }
}