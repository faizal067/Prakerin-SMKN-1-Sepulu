<?php

namespace App\Http\Controllers;

use App\Models\Lokal;
use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LokalController extends Controller
{
    public function show()
    {
        $id = request('id');
        return Lokal::findOrFail($id);
    }
}
