<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;
use webd\language\StringDistance;

class PlagiarismController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'document1' => 'required|max:5120',
            'document2' => 'required|max:5120'
        ]);

        $document1 = $request->file('document1');
        $document2 = $request->file('document2');

        $document1Name = time() . "_" . $document1->getClientOriginalName();
        $document2Name = time() . "_" . $document2->getClientOriginalName();

        $uploads_dir = "uploads";

        $document1->move($uploads_dir, $document1Name);
        $document2->move($uploads_dir, $document2Name);

        $path = base_path("public/uploads/");

        $doc1 = (new Pdf())->setPdf($path . $document1Name)->text();
        $doc2 = (new Pdf())->setPdf($path . $document2Name)->text();
        $result = StringDistance::JaroWinkler($doc1, $doc2);

        return response()->json(["result" => $result]);
    }
}
