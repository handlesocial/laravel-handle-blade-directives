<?php

use Handlesocial\BladeDirectives\DirectivesRepository;

return [

    /*
    |---------------------------------------------------------------------
    | @canany
    |---------------------------------------------------------------------
    */
    
    'canany' => function ($arguments) {
        
        if (str_contains($arguments, '|')) {
            
            $arguments = DirectivesRepository::parseDelimitedString($arguments,'|');
        
            list($permissions, $guard) = explode(',', $arguments.',');
        
            $permissions = explode('|', str_replace('\'', '', $permissions));
        
            $expression = "<?php if(auth({$guard})->check() && ( false";
            
            foreach ($permissions as $permission) {
            
                $expression .= " || auth({$guard})->user()->can('{$permission}')";
            
            }
        
            return $expression . ")): ?>";
        }
        
    },

    'endcanany' => function () {
        return '<?php endif; ?>';
    },

];
