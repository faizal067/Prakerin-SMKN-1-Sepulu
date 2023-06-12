<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function lihat(Request $request){
        if ($request->has('search')) {
            $data = Industri::where('lokasi','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Industri::where('user_id','LIKE','13')->paginate(5);
        }else {
            // $data = Industri::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            $data = Industri::paginate(5);
        }
        return view('/tampilkan/lihat', compact('data'), [
            "title" => "Data Siswa Pendaftar Prakerin"
        ]);
    }
    public function review(){
        return view('review');
    }
    public function detail(Request $request){
        if ($request->has('search')) {
            $data = Industri::where('id','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Industri::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Industri::where('id','LIKE',$request->id)->paginate(5);
            // $data = Industri::paginate(5);
        }
        return view('/tampilkan/tam', compact('data'), [
            "title" => "Data Siswa Pendaftar Prakerin"
        ]);
    }
}
