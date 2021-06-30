<?php

include_once ROOT . '/models/Data.php';

class SiteController
{

    public function actionIndexrsite()
    {

        $fileData = array();
        $jsonData = array();

        $csvData = Data::csvFileData(); 
        $jsonData = Data::jsonFileData();

        require_once(ROOT . '/views/index.php');
        return true;
    }

}

