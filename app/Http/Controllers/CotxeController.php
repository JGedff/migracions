<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotxe;

class CotxeController extends Controller
{
    public function index() {
        $cotxes = Cotxe::all();
        return view('vista', ['cotxes' => $cotxes]);
    }
}
