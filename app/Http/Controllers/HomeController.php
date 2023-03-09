<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Mahasiswa;
// use App\Models\Pelanggan;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getMahasiswa(Request $request){
        $mantes = Mahasiswa::All();
        $data['mahasiswas'] = [];
        if(isset($request->keyword)){
            foreach($mantes as $mante){
                if(str_contains($mante->nama, $request->keyword)){
                    $data['mahasiswas'][] = $mante;
                }
            }
        }else{
            $data['mahasiswas'] = $mantes;
        }
        return view('home', $data);
    }

    public function deleteMahasiswa(Request $request){
        $mahasiswa = Mahasiswa::findorfail($request->id);
        $mahasiswa->delete();
        return redirect('/');
    }
    
    public function addMahasiswa(Request $request){
        $mahasiswa = Mahasiswa::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'perguruan_tinggi' => $request->perguruan_tinggi,
            'mentor' => $request->mentor,
        ]);
        return redirect('/');
    }
    public function getMahasiswaById(Request $request){
        $mahasiswa = json_decode($request->mahasiswa, true);
        return view('editForm', ['mahasiswa'=> $mahasiswa]);
    }
    public function updateMahasiswa(Request $request, $id){
        $mahasiswa = Mahasiswa::findorfail($id);
        if($request->perguruan_tinggi != null){
            $mahasiswa->update(['perguruan_tinggi' => $request->perguruan_tinggi]);
        }
        if($request->mentor != null){
            $mahasiswa->update(['mentor' => $request->mentor]);
        }
        return redirect('/');
    }
}
