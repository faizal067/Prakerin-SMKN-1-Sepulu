<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Logbook;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class LogbookHomeController extends Controller
{
    public function index2(Request $request){
        if ($request->has('search')) {
            $data = Logbook::where('kegiatan','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Logbook::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Logbook::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            // $data = Logbook::paginate(5);
        }
        return view('/home/logbook', compact('data'), [
            "title" => "Laporan Prakerin"
        ]);
    }
    public function create(Request $request){

        return view('/home/rubah/create', [
            "title" => "Tambah Laporan Prakerin"
        ]);
        $user = User::findOrFail($validated['user_id']);
        Logbook::create([
            "user_id" => auth()->user()->id,
            "tglkegiatan" => now()->toDateString(),
            "kegiatan" => now()->toString(),
            "rincian" => now()->toString(),
            "foto" => now()->toString()
        ]);
    }
    public function insertlogbook(Request $request){
        // dd($request->all());
        $data = Logbook::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotokegiatan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('home.logbook');
    }
    public function edit($id){
        $data = Logbook::find($id);
        // dd($data);
        return view('/home/rubah/edit', compact('data'), [
            "title" => "Tambah Laporan Prakerin"
        ]);
    }
    public function updatelogbook(Request $request, $id){
        $data = Logbook::find($id);
        $data->update($request->all());
        return redirect()->route('home.logbook')->with('success','Data Berhasil Diubah');
    }
    public function deletelogbook($id){
        $data = Logbook::find($id);
        $data->delete();
        return redirect()->route('home.logbook')->with('success','Data Berhasil Dihapus');
    }
    public function exportpdflogbook(Request $request){
        if ($request->has('search')) {
            $data = Logbook::where('kegiatan','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Logbook::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Logbook::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            // $data = Logbook::paginate(5);
        }
        // $data = Logbook::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('home/rubah/datalogbook-pdf');
        return $pdf->download('datalogbook.pdf');
    }
    public function status($id){
        $data = Logbook::where('id',$id)->first();
        $status_sekarang = $data->is_accepted;
        if($status_sekarang == 1){
            Logbook::where('id',$id)->update([
                'is_accepted'=>0
            ]);
        }else{
            Logbook::where('id',$id)->update([
                'is_accepted'=>1
            ]);
        }
        return redirect()->route('home.logbook')->with('success','Status Berhasil Diubah');
    }
}
