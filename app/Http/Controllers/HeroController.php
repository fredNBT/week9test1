<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $users = DB::table('heroes')->get();

        return view('hero.index', ['heroes' => $users]);

     //   $view = view('hero/index');
     //   $view->hero = $hero;
     //   return $view;
    }

    public function create($data)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $users = DB::table('heroes')->get();

        return view('hero.index', ['heroes' => $users]);

     //   $view = view('hero/index');
     //   $view->hero = $hero;
     //   return $view;
    }

}
