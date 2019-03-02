<?php

namespace Handlesocial\HandleBladeDirectives;

use Illuminate\Support\Facades\Blade;

class HandleDirectivesRepository
{
    /**
     * Register directives.
     *
     * @param  array $arguments
     * @return void
     */
     
    public static function register(array $arguments)
    {
        collect($arguments)->each(function ($item, $key) {
            
            Blade::directive($key, $item);
        
        });
    }

    /**
     * Parse Delimited String.
     *
     * @param  string $arguments
     * @return \Illuminate\Support\Collection
     */
     
    public static function parseDelimitedString($arguments,$delimiter = '|')
    {
        
        return collect(explode($delimiter , $arguments))->map(function ($item) {
        
            return trim($item);
        
        });
        
    }

}
