<?php

use Phalcon\Mvc\Controller;


class TestController extends Controller
{
    public function indexAction()
    {
        $date = new  \App\Components\DateHelper();
        echo $date->getDate();
    }
}
 


