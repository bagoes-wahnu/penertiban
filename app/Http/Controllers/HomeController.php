<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penertiban;
use App\Models\Tahapan;
use App\Models\Jenis;

class HomeController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        $tahapan = Tahapan::all()
        // ->where('jenis_id', '=', 1)
        // ->join('jenis', 'tahapan.jenis_id', '=', 'jenis.id')
        ;
        // dd($data);
        // $data['tahapan'] = Tahapan::all();
        return view('home1'
        , compact('jenis', 'tahapan')
        );
    }

    public function create()
    {
        $jenis = Jenis::all();
        $tahapan1 = Tahapan::all()
        ->where('jenis_id', '=', 1)
        ->sortBy('id')
        // ->join('jenis', 'tahapan.jenis_id', '=', 'jenis.id')
        ;
        $tahapan2 = Tahapan::all()->where('jenis_id', '=', 2);
        $tahapan3 = Tahapan::all()->where('jenis_id', '=', 3);
        $tahapan4 = Tahapan::all()->where('jenis_id', '=', 4);
        $tahapan5 = Tahapan::all()->where('jenis_id', '=', 5);
        $tahapan6 = Tahapan::all()->where('jenis_id', '=', 6);
        $tahapan7 = Tahapan::all()->where('jenis_id', '=', 7);
        $tahapan8 = Tahapan::all()->where('jenis_id', '=', 8);
        $tahapan9 = Tahapan::all()->where('jenis_id', '=', 9);
        return view('home2'
        , compact('jenis', 'tahapan1', 'tahapan2', 'tahapan3', 'tahapan4', 'tahapan5', 'tahapan6', 'tahapan7', 'tahapan8', 'tahapan9')
        );
    }
    public function show($id)
    {
        $aspects = Penertiban::findOrFail($id);
        return view('home3', compact('aspects'));
    }

    public function login()
    {
        return view('login3');
    }
}
