<?php

namespace application\controller;

class Home extends Controller
{
    public function home()
    {
        $p ="hello";
        return $this->view('main-page',compact('p'));
    }

}