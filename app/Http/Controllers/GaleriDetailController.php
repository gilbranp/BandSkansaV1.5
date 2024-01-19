<?php

namespace App\Http\Controllers;

use App\Models\PengelolaanKonten;
use Illuminate\Http\Request;

class GaleriDetailController extends Controller
{
    public function show(string $id)
    {
        $pengelolaan = PengelolaanKonten::findOrFail($id);
        return view('frontend.portfolio-details', compact('pengelolaan'));

        
    }
}
