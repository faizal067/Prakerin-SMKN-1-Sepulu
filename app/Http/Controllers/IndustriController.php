<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index(){
        return view('industris.index',[
            "title" => "Industri"
        ]);
    }
    public function create(){
        return view('industris.create',[
            "title" => "Tambah Industri"
        ]);
    }
    public function edit()
    {
        $ids = request('ids');
        if (!$ids)
            return redirect()->back();
        $ids = explode('-', $ids);

        $industris = Industri::query()
            ->whereIn('id', $ids)
            ->get();

        return view('industris.edit', [
            "title" => "Edit Data Industri",
            "industris" => $industris
        ]);
    }
}
