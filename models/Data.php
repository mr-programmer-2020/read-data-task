<?php

class Data
{
    

    public static function csvFileData()
    {
        $csvPath = 'C:\xampp\htdocs\read-data-task\data\to_upload.csv';
        $file = fopen($csvPath, 'r');
        $csvData = array();
        while (($line = fgetcsv($file)) !== FALSE) 
        {
        
        $csvData[] = $line;
        } 

        fclose($file);
        return $csvData;


    }

    public static function jsonFileData()
    {
        $jsonPath = 'C:\xampp\htdocs\read-data-task\data\to_upload.json';
        $str = file_get_contents($jsonPath);
        $json = json_decode($str,true);

        return $json;
    }

}