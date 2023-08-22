<?php

namespace App\Http\Controllers;

use App\Models\Ingridients;
use App\Models\Mcoa;
use App\Models\Mkategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $roleIngridients = Ingridients::all();
        $roleCoa = Mcoa::all();
        $roleKategori = Mkategori::all();
        return view('coa.ingridient', compact(['roleCoa', 'roleKategori', 'roleIngridients']));
    }
}
