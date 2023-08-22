<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingridients;
use Illuminate\Http\Request;


class McoaController extends Controller
{

    public function vnormalisasi(Request $request)
    {
        $roleIngridients = Ingridients::all();

        return view('coa.normalisasi', compact(['roleIngridients']));
    }
    public function vingridients(Request $request)
    {
        if ($request->has('search')) {
            $roleIngridients = Ingridients::where('nama_barang', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $roleIngridients = Ingridients::all();
        }
        return view('coa.ingridient', ['roleIngridients' => $roleIngridients]);
    }

    public function storeIngridients(Request $request)
    {
        Ingridients::create($request->except(['_token', 'submit']));
        return redirect('/mcoa/vingridients');
    }

    public function destroyIngridients($id)
    {
        $delIngridients = Ingridients::find($id);
        $delIngridients->delete();
        return redirect('/mcoa/vingridients');
    }

    public function editIngridients($id)
    {
        $coa = Ingridients::find($id);
        return view('coa.editIngridients', compact(['coa']));
    }

    public function updateIngridients($id, Request $request)
    {
        $coa = Ingridients::find($id);
        $coa->update($request->except(['_token', 'submit']));
        return redirect('/mcoa/vingridients');
    }
    public function exportIngridients()
    {
        $roleIngridients = Ingridients::all();
        return view('coa.exportPdfIngridients', compact(['roleIngridients']));
    }
}
