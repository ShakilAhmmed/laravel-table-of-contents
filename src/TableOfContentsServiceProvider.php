<?php

namespace ShakilAhmmed\TableOfContents;

use Illuminate\Support\ServiceProvider;

class TableOfContentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'contents');

        if ($this->app->runningInConsole()) {

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/../views' => resource_path('views/table-of-contents/contents'),
            ], 'views');

        }
    }

    public function register()
    {
        $this->app->singleton('contents', function () {
            return new Contents;
        });
    }
}
