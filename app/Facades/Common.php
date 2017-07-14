<?php

namespace App\Facades;

use Anomaly\SettingsModule\Setting\SettingModel;
use Illuminate\Support\Facades\DB;
use App\Config;
use Carbon\Carbon;
class Common{
    public function siteName(){
        $siteName = SettingModel::where('id',3)->pluck('value');
        return $siteName;
    }
    public function address(){
        $address = SettingModel::where('id',7)->pluck('value');
        return $address;
    }
    public function tel(){
        $tel = SettingModel::where('id',6)->pluck('value');
        return $tel;
    }
    public function mapUrl(){
        $mapUrl = SettingModel::where('id',8)->pluck('value');
        return $mapUrl;
    }


}