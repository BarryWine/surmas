<?php

namespace App\Http\Controllers;

use App\Models\Surat;
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

    public function simpan(Request $req)
    {
        $simpan = new Surat();
        $simpan->dari = $req->dari;
        $simpan->tujuan = $req->tujuan;
        $simpan->keterangan = $req->keterangan;
        $simpan->save();
        return redirect()->route('home');

    }
    public function hapus($id){
        $hapus = Surat::find($id)->delete();
        return redirect()->route('home');
    }

    public function index()
    {
        $datasurat = Surat::all();
        return view('home')->with([
            'datas' => $datasurat
        ]);
    }
}
