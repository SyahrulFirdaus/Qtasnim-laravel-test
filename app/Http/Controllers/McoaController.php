<?php

namespace App\Http\Controllers;

use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Ingridients;
use App\Models\Mcoa;
use App\Models\Mkategori;
use App\Models\Mnormalone;
use App\Models\Mreport;
use App\Models\Mtransaction;
use Illuminate\Http\Request;


class McoaController extends Controller
{


    public function vingridients(Request $request)
    {
        if ($request->has('search')) {
            $roleIngridients = Ingridients::where('nama_barang', 'LIKE', '%' . $request->search . '%')->get();
            $roleIngridients = Ingridients::where('tanggal_transaksi', 'LIKE', '%' . $request->search . '%')->get();
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
        $roleKategori = Mkategori::all();
        $roleCoa = Mcoa::all();
        return view('coa.editIngridients', compact(['coa', 'roleCoa', 'roleKategori']));
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
