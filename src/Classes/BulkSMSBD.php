<?php

namespace iqbalhasandev\bulksmsbd\Classes;


use Illuminate\Support\Facades\Facade;

class BulkSMSBD extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'BulkSMSBD';
    }
}
