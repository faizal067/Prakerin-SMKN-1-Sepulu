<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User;

class LogbookController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $data = Logbook::where('tglkegiatan','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Logbook::where('user_id','LIKE','13')->paginate(5);
        }else {
            // $data = Logbook::where('user_id','LIKE',auth()->user()->id)->paginate(5);
            $data = Logbook::paginate(5);
        }
        return view('logbooks.index', compact('data'), [
            "title" => "Laporan Prakerin"
        ]);
    }
    public function detail(Request $request){
        if ($request->has('search')) {
            $data = Logbook::where('id','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = Logbook::where('user_id','LIKE','13')->paginate(5);
        }else {
            $data = Logbook::where('id','LIKE','%'.$request->id.'%')->paginate(5);
            // $data = Logbook::paginate(5);
        }
        return view('logbooks.tampil', compact('data'), [
            "title" => "Data Laporan Prakerin"
        ]);
    }
    public function exportpdflogbook(){
        $data = Logbook::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('logbooks.datalogbook-pdf');
        return $pdf->download('datalogbookAdmin.pdf');
    }
    public function exportexcellogbook(){
       return Excel::download(new LogbookExport, 'datalogbook.xlsx');
    }
    public function importexcellogbook(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalname();
        $data->move('LogbookData', $namafile);

        Excel::import(new LogbookImport, \public_path('/LogbookData/'.$namafile));
        return \redirect()->back();
    }
    public function acceptLogbook(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|string|numeric'
        ]);

        $user = User::findOrFail($validated['user_id']);

        $logbook = Logbook::query()
            ->where('user_id', $user->id)
            ->first();
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
        return back()
            ->with('success', "Berhasil menerima data laporan");
    }
    public function notacceptLogbook(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|string|numeric'
        ]);

        $user = User::findOrFail($validated['user_id']);

        $logbook = Logbook::query()
            ->where('user_id', $user->id)
            ->first();
        $data = Logbook::where('id',$id)->first();
        $status_sekarang = $data->is_accepted;
        if($status_sekarang == 0){
            Logbook::where('id',$id)->update([
                'is_accepted'=>1
            ]);
        }else{
            Logbook::where('id',$id)->update([
                'is_accepted'=>0
            ]);
        }
        return back()
            ->with('failed', "Berhasil menerima data laporan");
    }
}
