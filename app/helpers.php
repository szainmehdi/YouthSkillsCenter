<?php

function set_link_active($route, $class = 'active') {
    if (is_array($route)) {
        foreach ($route as $r) {
            if (Route::currentRouteName() == $r)
                return $class;
        }
        return '';
    } else {
        return (Route::currentRouteName() == $route) ? $class : '';
    }
}

function my_ysc_link_active($route, $class = 'active') {
    $route = strtolower($route);
    return (strpos($route, 'myysc') === 0) ? $class : '';
}

function random_color($seed = 'thisismyseed') {
    mt_srand(crc32($seed));
    $colors = [
        '#e51c23',
        '#e91e63',
        '#9c27b0',
        '#673ab7',
        '#3f51b5',
        '#5677fc',
        '#03a9f4',
        '#00bcd4',
        '#009688',
        '#259b24',
        '#8bc34a',
        '#cddc39',
        '#ffeb3b',
        '#ffc107',
        '#ff9800',
        '#ff5722',
        '#795548',
        '#9e9e9e',
        '#607d8b',
    ];
    return $colors[mt_rand(0, count($colors) - 1)];
}

function mailto($email, array $attributes = []) {
    $link = "<a href=\"mailto:{$email}\"";

    foreach($attributes as $k => $v) {
        $link .= " {$k}=\"{$v}\"";
    }

    $link .= ">" .e($email). "</a>";

    return $link;
}