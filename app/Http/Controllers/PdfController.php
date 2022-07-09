<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf() 
    {
        $pdf = Pdf::loadView('pdf');
        return $pdf->stream(); 
    }

}


