<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Spatie\PdfToText\Pdf;
use webd\language\StringDistance;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $jurnal_1 = (new Pdf())->setPdf('documents/jurnal_1.pdf')->text();
        $jurnal_2 = (new Pdf())->setPdf('documents/jurnal_2.pdf')->text();
        $distance = StringDistance::JaroWinkler($jurnal_1, $jurnal_2);


        return view('home', [
            'jurnal_1'  => $jurnal_1,
            'jurnal_2'  => $jurnal_2,
            'distance'  => $distance
        ]);
    }
}
