<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfControllerNew extends Controller
{
    public function generatePdfNew() 
    {
        $pdf2 = Pdf::loadView('pdf-2');
        return $pdf2->stream(); 
    }
}
