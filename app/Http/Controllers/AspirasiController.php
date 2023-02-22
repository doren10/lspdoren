<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Validator;


class AspirasiController extends Controller
{
    public function show()
    {
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id');
        $kategori = Kategori::all();
        $id =abs($noUrut + 1);
        return View('search', [
            'title' => 'Pengaduan',
            'aspirasi' => $aspirasi->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
    }
    public function index()
    {
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id');
        $kategori = Kategori::all();
        $id =abs($noUrut + 1);
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'aspirasi' => $aspirasi->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'lokasi' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'ket' => 'required',
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('thumbnail',$file_name);
    
        $data = Siswa::all()->where('id',$request->nis)->count();
        if ($data > 0) {
       
            Input_aspirasi::create([
                'id' => $request->id,
                'nis' => $request->nis,
                'lokasi' => $request->lokasi,
                'id_kategori' => $request->id_kategori,
                'ket' => $request->ket,
                'image' => $image,
            ]);
            Aspirasi::create([
                'id' => $request->id,
                'id_aspirasi' => $request->id,
                'id_kategori' => $request->id_kategori,
            ]);
            return Redirect("/aspirasi?id=$request->id");
            } else{
                return Redirect("/aspirasi?nis=$request->nis");
            }
        }
    public function feedback(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['feedback' => $request->feedback]);
        return redirect('/aspirasi#aspirasi');
    }
}