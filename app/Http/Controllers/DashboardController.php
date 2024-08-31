<?php

namespace App\Http\Controllers;
use App\Models\dokumen;
use App\Models\User;
use App\Http\Controllers\DokumenWnaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $dataDokumen = dokumen::select('id', DB::raw('count(*) as total'))
        ->groupBy('id')
        ->get();

        
        // $dataAmbil = Ambil::count();
        $dokumenCount = $dataDokumen->count();

        $dataArsip = [
            'Januari' => $this->filterBulan($dataDokumen, '1'),
            'Februari' => $this->filterBulan($dataDokumen, '2'),
            'Maret' => $this->filterBulan($dataDokumen, '3'),
            'April' => $this->filterBulan($dataDokumen, '4'),
            'Mei' => $this->filterBulan($dataDokumen, '5'),
            'Juni' => $this->filterBulan($dataDokumen, '6'),
            'Juli' => $this->filterBulan($dataDokumen, '7'),
            'Agustus' => $this->filterBulan($dataDokumen, '8'),
            'September' =>$this->filterBulan($dataDokumen, '9'),
            'Oktober' =>$this->filterBulan($dataDokumen, '10'),
            'November' =>$this->filterBulan($dataDokumen, '11'),
            'Desember' =>$this->filterBulan($dataDokumen, '12')
        ];
        return view('dashboard', compact('userCount', 'dokumenCount', 'dataDokumen','dataArsip'));
    }
    public function filterBulan($dataArray, $bulan)
    {
        foreach($dataArray as $data){
            if($data->month == $bulan){
                return $data->total;
            }
        }

        return 0;
    }
}