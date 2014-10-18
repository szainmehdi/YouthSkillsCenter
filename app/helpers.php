<?php

function set_link_active($route, $class = 'active')
{
    return (Route::currentRouteName() == $route) ? $class : '';
}