<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class DaftarAdminController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $data = Daftar::where('kelompok','LIKE','%' .$request->search.'%')->simplePaginate(5);
            $data = Daftar::where('nama','LIKE','%' .$request->search.'%')->simplePaginate(5);
            // $data = Daftar::where('user_id','LIKE','13')->paginate(5);
        }else {
            // $data = Daftar::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            $data = Daftar::paginate(5);
        }
        return view('daftars.index', compact('data'), [
            "title" => "Data Siswa Pendaftar Prakerin"
        ]);
    }
    public function detail(Request $request){
        if ($request->has('search')) {
            $data = Daftar::where('kelompok','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Daftar::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Daftar::where('id','LIKE','%'.$request->id.'%')->paginate(5);
            // $data = Daftar::paginate(5);
        }
        return view('daftars.tampil', compact('data'), [
            "title" => "Data Siswa Pendaftar Prakerin"
        ]);
    }
    public function exportpdfdaftar(){
        $data = Daftar::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('daftars.datadaftar-pdf');
        return $pdf->download('datadaftar.pdf');
    }
    public function suratpdf(Request $request){
        if ($request->has('search')) {
            $data = Daftar::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Daftar::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Daftar::where('kelompok','LIKE', $request->kelompok)->paginate(5);
            // $data = Daftar::paginate(5);
        }

        view()->share('data', $data);
        $pdf = PDF::loadview('daftars.suratpdf');
        return $pdf->download('datasuratmagang.pdf');
    }
    public function acceptDaftar(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|string|numeric'
        ]);

        $user = User::findOrFail($validated['user_id']);

        $daftar = Daftar::query()
            ->where('user_id', $user->id)
            ->first();
        $data = Daftar::where('id',$id)->first();
        $status_sekarang = $data->is_accepted;
        if($status_sekarang == 1){
            Daftar::where('id',$id)->update([
                'is_accepted'=>0
            ]);
        }else{
            Daftar::where('id',$id)->update([
                'is_accepted'=>1
            ]);
        }
        return back()
            ->with('success', "Berhasil menerima data pendaftaran prakerin");
    }
    public function notacceptDaftar(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|string|numeric'
        ]);

        $user = User::findOrFail($validated['user_id']);

        $daftar = Daftar::query()
            ->where('user_id', $user->id)
            ->first();
        $data = Daftar::where('id',$id)->first();
        $status_sekarang = $data->is_accepted;
        if($status_sekarang == 0){
            Daftar::where('id',$id)->update([
                'is_accepted'=>1
            ]);
        }else{
            Daftar::where('id',$id)->update([
                'is_accepted'=>0
            ]);
        }
        return back()
            ->with('failed', "Mohon maaf data pendaftaran prakerin tidak disetujui");
    }
}
