<?php

function dd($param = null)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';

    die();
}

function esc($str)
{
    return htmlspecialchars($str);
}


function redirect($path)
{
    header('Location: ' . ROOT . '/' . $path);
    die();
}
