<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingsController extends Controller
{
    //
    /*
     * вывод страницы антибюджет
     */
    public function roadmap(){
        return view('landings.roadmap');
    }

}
