<?php

function set_link_active($route, $class = 'active')
{
    return (Route::currentRouteName() == $route) ? $class : '';
}
function my_ysc_link_active($route, $class = 'active') {
    $route = strtolower($route);
    return (strpos($route,'myysc') === 0) ? $class : '';
}