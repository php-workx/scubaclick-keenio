<?php namespace ScubaClick\Keenio;

use Illuminate\Support\Facades\Facade;

class KeenioFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'keenio';
    }
}
