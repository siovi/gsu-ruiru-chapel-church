<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function assets()
    {
    
        return view('ajaxcrud.assets');
        
    }
 
    public function generatePDF58()
    {
        $data = ['title' => 'Church Assets'];
        $pdf = PDF::loadView('ajaxcrud.assets', $data);
        return $pdf->download('Assets.pdf');
    }
}
