<?php

trait Controller
{
    public function view($name)
    {
        $filename = '../app/Views/' . $name . '.php';
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = '../app/Views/404.php';
            require $filename;
        }
    }
}
