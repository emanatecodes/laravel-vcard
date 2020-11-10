<?php

namespace Emanate\VCard;

use Illuminate\Support\ServiceProvider;
use JeroenDesloovere\VCard\VCard;
use JeroenDesloovere\VCard\VCardParser;

class VCardServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('emanate.vcard', function () {
            return new VCard();
        });
        // wip
        $this->app->singleton('emanate.vcardparser', function () {
            // return  VCardParser::class;
        });
        
    }
}
