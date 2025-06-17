<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

class SeriesController
{
    public function listarSeries(Request $request)
    {
        $series = [
            "Grays Anatomy",
            "Lost",
            "brooklyn 99",

        ];

        $html = '<ul>';

            foreach($series as $serie){
                $html .= "<li>$serie</li>";
            }
        $html .= '</ul>';

            return $html;
    }
}
