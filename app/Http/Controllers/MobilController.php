<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil; 

class MobilController extends Controller
{

    // menampilkan data
    public function index()
    {
        $mobil = Mobil::all();
        return view ('h_carsadmin')->with('mobil', $mobil);
        // return view ('h_cars')->with('mobil', $mobil);
    }

    // menyimpan data
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $requestData["photo"] = '/storage/'.$path;
        Mobil::create($requestData);
        return redirect('carsadmin')->with('flash_message', 'Input Addedd!'); 
    }

    // menampilkan data yang mau di update
    public function show($id)
    {
        $data=Mobil::find($id);
        return view('h_updatemobil',compact('data'));
    }

    // menyimpan data yang telah diupdate
    public function update(Request $request, $id)
    {
        $data=Mobil::find($id);
        $data->merk_mobil=$request->get('merk_mobil');
        $data->plat_mobil=$request->get('plat_mobil');
        $data->warna_mobil=$request->get('warna_mobil');
        $data->harga_mobil=$request->get('harga_mobil');
        $data->tahun=$request->get('tahun');
        $data->max_penumpang=$request->get('max_penumpang');
        $data->transmisi=$request->get('transmisi');
        $data->status=$request->get('status');
        $data->save();
        return redirect()->route('mobil');

    }

    // menghapus data
    public function hapus($id)
    {
        $data=Mobil::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
    // menampilkan data ke beranda
    public function indexx()
    {
        $mobil = Mobil::all();
        return view ('h_cars')->with('mobil', $mobil);
    }
    //menampilkan data cars ke input rental
    public function showr($id)
    {
        $data=Mobil::find($id);
        return view('h_inputrental',compact('data'));
    }
}
