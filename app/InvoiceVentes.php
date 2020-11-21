<?php

namespace App;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class InvoiceVentes
{
    protected $pdf;
    
    public function __construct() {
        $this->pdf = new Dompdf;
    }

    public function generate() {
    $this->pdf->loadHtml(
        View::make('invoice')->render();
    );
    $this->pdf->render();
    return $this->pdf->output();
}
}