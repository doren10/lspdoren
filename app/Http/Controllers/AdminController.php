<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Input_aspirasi;


class AdminController extends Controller
{
    
    public function index()
    {
        return View('Admin', [
            'title' => 'Admin',
            'kategori' => Kategori::all(),
            'aspirasi' => Aspirasi::where('feedback',  null)->fillter(request(['search', 'kategori', 'waktu', 'status','sort']))->paginate(5),
            'selesai' => Aspirasi::where('status', "Selesai")->where('feedback', '!=', null)->fillter(request(['search','sort','kategori', 'waktu']))->paginate(5)
        ]);
    }
    public function status(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['status' => $request->status]);
        return redirect('/admin');
    }
    public function delete(Request $request)
    {
        Aspirasi::where('id', $request->id)->delete();
        Input_aspirasi::where('id', $request->id)->delete();
        return redirect('/admin');
    }
}