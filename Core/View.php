<?php

namespace Core;

/**
 * Class View
 * @package Core
 */
class View
{
    private static $folders = ['views', 'components'];
    
    /**
     * Renders a view with parameter options.
     * @param $view
     * @param array $variables
     */
    public static function render($view, $variables = [])
    {
        foreach (self::$folders as $folder) {
            $path = Router::$base . '/' . $folder . '/' . $view . '.php';
            
            if (file_exists($path)) {
                $file = $path;
                break;
            }
        }
        
        if (isset($file)) {
            extract($variables);
            require $file;
        }
    }
}