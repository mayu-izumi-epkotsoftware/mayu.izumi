<?php

namespace App\Helpers;

class DateTimeHelper{
    static function toHMString($datetime){
        return date_format($datetime,'H:i');
    }
    static function toHMSString($datetime){
        return date_format($datetime,'H:i:s');
    }
    static function toYMDString($datetime){
        return date_format($datetime,'Ymd');
    }
    static function toYMDSlashString($datetime){
        return date_format($datetime,'Y/m/d');
    }
    static function toYMDHMSSlashString($datetime){
        return date_format($datetime,'Y/m/d H:i:s');
    }
    static function toYMDHMSFFFSlashString($datetime){
        return date_format($datetime,'Y/m/d H:i:s.v');
    }
    static function toYMDHMSFFFFFFSlashString($datetime){
        return date_format($datetime,'Y/m/d H:i:s.u');
    }
}

$dt = new \DateTime('2999-12-31 23:58:59.456789', new \DateTimeZone('Asia/Tokyo'));
var_dump(\App\Helpers\DateTimeHelper::toHMString($dt)); // string(5) "23:58"
var_dump(\App\Helpers\DateTimeHelper::toHMSString($dt)); // string(8) "23:58:59"
var_dump(\App\Helpers\DateTimeHelper::toYMDString($dt)); // string(8) "29991231"
var_dump(\App\Helpers\DateTimeHelper::toYMDSlashString($dt)); // string(10) "2999/12/31"
var_dump(\App\Helpers\DateTimeHelper::toYMDHMSSlashString($dt)); // string(19) "2999/12/31 23:58:59"
var_dump(\App\Helpers\DateTimeHelper::toYMDHMSFFFSlashString($dt)); // string(23) "2999/12/31 23:58:59.456"
var_dump(\App\Helpers\DateTimeHelper::toYMDHMSFFFFFFSlashString($dt)); // string(26) "2999/12/31 23:58:59.456789"