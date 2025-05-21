<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental; 

class RentalController extends Controller
{
    //menampilkan data
    public function indexr()
    {
        $rental = Rental::all();
        // dd($rental->toArray());
        return view ('h_activityadmin')->with('rental', $rental);
    }
    // menampilkan data 
    public function indexra()
    {
        $rental = Rental::all();
        // dd($rental->toArray());
        return view ('h_activity')->with('rental', $rental);
    }
    // menghapus data
    public function hapusx($id)
    {
        $data=Rental::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
    public function input(Request $request)
    {
        $requestData = $request->all();
        rental::create($requestData);
        return redirect('activityadmin')->with('flash_message', 'Input Addedd!'); 
    }
    // menampilkan data yang mau di update
    public function showx($id)
    {
        $data=Rental::find($id);
        return view('h_updaterental',compact('data'));
    }
    // menyimpan data yang telah diupdate
    public function updatex(Request $request, $id)
    {
        $data=Rental::find($id);
        $data->status_rent=$request->get('status_rent');
        $data->save();
        return redirect()->route('indexr');

    }
    // menampilkan data detail rental
    public function detail($id)
    {
        $data=Rental::find($id);
        return view('h_detailrental',compact('data'));
    }
}
