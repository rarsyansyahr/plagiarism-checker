<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\URL;
// use Spatie\PdfToText\Pdf;
// use webd\language\StringDistance;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        // $path = base_path("public/uploads/");

        // $jurnal_1 = (new Pdf())->setPdf($path . '1625221002_Implementasi_Website_Berbasis_Search_Engine_Optimi.pdf')->text();
        // $jurnal_2 = (new Pdf())->setPdf($path . '1625221002_indraalannugroho_stmikamikompurwokerto_PKM-KC.pdf')->text();
        // $distance = StringDistance::JaroWinkler($jurnal_1, $jurnal_2);

        // print_r($distance);


        return view('home');
    }
}
