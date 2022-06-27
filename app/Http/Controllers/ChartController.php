<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{

    public static function RecettesPerYear($year = 0){
        $months = [];
        for($i = 1; $i<13; $i++){
            array_push($months, $i);
        }
        $currentYear = date("Y");
        $previousYear = intval($currentYear)-1;
        
        $chartBackgroundColors = [
                "rgb(255, 99, 132)",
                "rgb(0, 99, 132)"
            ];


        $datasets = [
            [
                'label'             =>  $previousYear,
                'backgroundColor'   =>  $chartBackgroundColors[0],
                "data"              =>  [14500, 33456, 19000, 65000, 25000, 13450, 18500, 23456, 9000, 19000, 25000, 13450]
            ],
            [
                'label'             =>  $currentYear,
                'backgroundColor'   =>  $chartBackgroundColors[1],
                "data"              =>  [19500, 31456, 11000, 75000, 75000, 14050, 10500, 83456, 11000, 17000, 16000, 14500]
            ]
        ];


    }
}
