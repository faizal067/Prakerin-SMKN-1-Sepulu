<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index4(Request $request){
        if ($request->has('search')) {
            $data = Daftar::where('kegiatan','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Logbook::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Daftar::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            // $data = Logbook::paginate(5);
        }
        return view('/home/daftar', compact('data'), [
            "title" => "Form Pendaftaran Prakerin"
        ]);
    }
    public function create(Request $request){

        return view('/home/daftar/create', [
            "title" => "Form Pendaftaran"
        ]);
        $user = User::findOrFail($validated['user_id']);
        Daftar::create([
            "user_id" => auth()->user()->id,
            "nama" => now()->toString(),
            "kelas" => now()->toString(),
            "jurusan" => now()->toString(),
            "alamat" => now()->toString(),
            "jeniskelamin" => now()->toString(),
            "agama" => now()->toString(),
            "kelompok" => now()->toString(),
            "industri" => now()->toString(),
            "notelp" => now()->toString(),
            "foto" => now()->toString(),
            "keahlian" => now()->toString()
        ]);
    }
    public function insertdaftar(Request $request){
        // dd($request->all());
        $data = Daftar::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotodaftar/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('home.daftar');
    }
    public function edit($id){
        $data = Daftar::find($id);
        // dd($data);
        return view('/home/rubah/edit', compact('data'), [
            "title" => "Edit Data Pendaftaran"
        ]);
    }
    public function updatedaftar(Request $request, $id){
        $data = Daftar::find($id);
        $data->update($request->all());
        return redirect()->route('home.daftar')->with('success','Data Berhasil Diubah');
    }
    public function deletedaftar($id){
        $data = Daftar::find($id);
        $data->delete();
        return redirect()->route('home.daftar')->with('success','Data Berhasil Dihapus');
    }
    public function exportpdfdaftar(){
        $data = Daftar::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('log/datadaftar-pdf');
        return $pdf->download('datadaftar.pdf');
    }
    public function exportexceldaftar(){
       return Excel::download(new DaftarExport, 'datadaftar.xlsx');
    }
    public function importexceldaftar(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalname();
        $data->move('daftarData', $namafile);

        Excel::import(new DaftarImport, \public_path('/DaftarData/'.$namafile));
        return \redirect()->back();
    }
    public function accept($id){
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
        return redirect()->route('home.daftar')->with('success','Status Berhasil Diubah');
    }
}
