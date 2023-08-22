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
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $roleIngridients = Ingridients::where('nama_barang', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $roleIngridients = Ingridients::all();
        }
        return view('coa.ingridient', ['roleIngridients' => $roleIngridients]);
    }
}
