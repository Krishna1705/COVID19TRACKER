<?php
$jsonData=file_get_contents("https://pomber.github.io/covid19/timeseries.json");//data are in json format

$data= json_decode($jsonData,true);//json_decode convert json data into object form,if you write true then object will converted into 
            //an associative array.
         // echo "<pre>";
         // print_r($data);

         foreach($data as $key=>$value){
             $days_count=count($value)-1;//it will give last element of array
             $days_count_prev=$days_count-1;//it will give second last element in array
         }

         $world_total_confirmed=0;
         $world_total_recovered=0;
         $world_total_deaths=0;

         foreach($data as $key=>$value){
                $world_total_confirmed = $world_total_confirmed +  $value[$days_count]["confirmed"];
                $world_total_recovered = $world_total_recovered +  $value[$days_count]["recovered"];
                $world_total_deaths = $world_total_deaths +  $value[$days_count]["deaths"];
        }
?>