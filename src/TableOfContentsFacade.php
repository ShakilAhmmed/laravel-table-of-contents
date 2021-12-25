<?php

namespace ShakilAhmmed\TableOfContents;

use Illuminate\Support\Facades\Facade;

class TableOfContentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contents';
    }
}
