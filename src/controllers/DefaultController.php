<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function mainPage()
    {
        $this->render('mainPage');

    }

}