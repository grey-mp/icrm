<?php

class SiteController extends CController {

    public $layout = 'main';
    public $pageTitle;

    public function actionIndex() {
        $this->render('index');
    }

}

/* End of file SiteController.php */
