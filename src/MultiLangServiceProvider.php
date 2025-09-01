<?php

namespace Miladul\MultiLang;

use Illuminate\Support\ServiceProvider;

class MultiLangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish lang JSON files to Laravel resources/lang/
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang'),
        ], 'multilang');
    }

    public function register()
    {
        // Optionally load helpers
        require_once __DIR__ . '/Helpers.php';
    }
}
