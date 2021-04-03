<?php


namespace system\traits;


trait View
{
    // this method is for access to views and send objects
    protected function view($dir, $variables = null)
    {
        $dir = str_replace('.', '/', $dir);
        if ($variables)
            extract($variables);

        // view path
        $path = realpath(dirname(__FILE__) . "/../../application/view/" . $dir . ".php");
        if (file_exists($path))
            return require_once($path);
        else
            echo "this view " . $dir . " not exists!";
    }

    public function asset($dir)
    {
        $path = BASE_URL ."public/". $dir;
        echo $path;
    }

    protected function url($url)
    {
        if ($url[0] == '/') {
            $url = substr($url , 1 , strlen($url) - 1);
        }
        echo BASE_URL.$url;
    }
}