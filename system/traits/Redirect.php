<?php

namespace system\traits;

trait Redirect
{
    protected function redirect($url)
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
        header("Location: " . $protocol . $_SERVER['HTTP_HOST'] . BASE_DIR . $url);
    }

    protected function redirectBack()
    {
        $http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER["HTTP_REFERER"] : null;
        if ($http_referer != null) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            echo "redirect back problem";
        }
    }
}