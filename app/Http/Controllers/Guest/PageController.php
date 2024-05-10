<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){


        $movies = Movie ::all();
        $title_1 = 'THE MOST VIEWED FILMS OF THE WEEK';

        return view('home', compact('movies','title_1'));
    }

    public function bestFilms(){
        $movies = Movie ::where('vote','>=',9)

           ->orderBy('title')
           ->get();

           $title_1 = 'MOVIE WITH A RATING OF 9+';


        return view('home', compact('movies','title_1'));
    }

    public function nuovaPagina(){
        return view('nuova-pagina');
    }
}
