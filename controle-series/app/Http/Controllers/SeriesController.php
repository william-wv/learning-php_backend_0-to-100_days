<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
