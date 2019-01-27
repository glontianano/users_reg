<?php

define('TEMPLATE_FOLDER', dirname(__DIR__) . '/view/');


function render($templateName, $variables = [])
{
    include TEMPLATE_FOLDER . $templateName . '.php';
}