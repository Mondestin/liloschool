<?php
  
use Carbon\Carbon;
  
/**
 * check current route and make active
 *
 * @return response()
 */
if (! function_exists('routeActive')) {
    function routeActive($route)
    {
        return (request()->is($route)) ? 'active' : '';
    }
}
  
/**
 * make menu open and active
 *
 * @return response()
 */
if (! function_exists('routeMenuActive')) {
    function routeMenuActive($route)
    {
        return (request()->segment(2) == $route) ? 'active' : '';
    }
}

/**
 * make submenu open
 *
 * @return response()
 */
if (! function_exists('openSubMenu')) {
    function openSubMenu($route)
    {
        return (request()->is($route)) ? 'show' : '';
    }
}