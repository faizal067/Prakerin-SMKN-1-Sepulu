<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use App\Models\Logbook;
use App\Models\Industri;
use App\Models\Position;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            "title" => "Dashboard",
            "positionCount" => Position::count(),
            "userCount" => User::count(),
            "industriCount" => Industri::count(),
            "logbookCount" => Logbook::count(),
            "daftarCount" => Daftar::count()
        ]);
    }
}
