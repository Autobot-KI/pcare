<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PcareController extends Controller
{
    public function index(){

        return view('backend.pcare.index');
    }

    public function dokter(){

        return view('backend.pcare.dokter.index');
    }

    public function poli(){

        return view('backend.pcare.poli.index');
    }

    public function tindakan(){

        return view('backend.pcare.tindakan.index');
    }
}
