<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }
    /**
     * Reporte que genera el listado de todos los técnicos.
     */
    public function export_technician()
    {
         $technicians = Technician::all();
         $data = array(
            'technicians' => $technicians
         );
         $pdf = Pdf::loadView('reports.export_technicians', $data)->setPaper('letter', 'pontrait');//landscape:horizontal, portrait:vertical
         return $pdf->download('technicians.pdf');
    }
}
