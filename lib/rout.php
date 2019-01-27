<?php


function router($url, $controller = [])
{
    //print_r($_SERVER);
    if ($url == $_SERVER['PATH_INFO']) {

        include __ROOT__ . '/controller/' . $controller[0];
        $function = $controller[1];
        $function();
    }
}

