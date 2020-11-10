<?php

namespace Emanate\VCard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Emanate\VCard\VCard
 */
class VCard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'emanate.vcard';
    }
}
