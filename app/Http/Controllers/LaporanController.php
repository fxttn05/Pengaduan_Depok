<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class LaporanController extends Controller
{
    public function __construct(Pengaduan $pengaduan)
    {
        $this->pengaduan = $pengaduan;
    }

    public function index()
    {
        return view('dashboard.laporan.index');
    }

    public function getLaporan(Request $request)
    {
        $from = $request->from.' '.'00:00:00';
        $to = $request->to.' '.'23:59:59';

        $pengaduan = $this->pengaduan->whereBetween('created_at', [$from, $to])->get();

        return view('dashboard.laporan.index', ['pengaduan' => $pengaduan, 'from' => $from, 'to' => $to]);
    }

    public function cetakLaporan($from, $to)
    {
        $pengaduan = $this->pengaduan->whereBetween('created_at', [$from, $to])->get();

        view()->share([
            'pengaduan' => $pengaduan,
            'from' => $from,
            'to' => $to
        ]);
        $pdf = PDF::loadView('dashboard.laporan.print');
      
        return $pdf->download('pengaduan-'.$to.' - '.$from.'.pdf');
    }
}
