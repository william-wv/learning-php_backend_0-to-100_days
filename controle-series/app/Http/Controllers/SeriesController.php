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

        return view('series.index', ['series' => $series]);
    }
}
