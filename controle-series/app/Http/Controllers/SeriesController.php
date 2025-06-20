<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController
{
    public function listarSeries()
    {
//        $series = DB::select('select * from series;');
//        dd($series);

//        $series = Serie::all();

        $series = Serie::query()->orderBy('nome','desc')->get();

        return view('series.index', ['series' => $series]);
    }
    public function criarSeries()
    {
        return view('series.create');
    }

    public static function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        $serie = new Serie();
        $serie->name =  $nomeSerie;

        $serie->save();
        //DB::insert('insert into series (name) values (?)', [$nomeSerie]);

        return redirect('/series');
    }
}
