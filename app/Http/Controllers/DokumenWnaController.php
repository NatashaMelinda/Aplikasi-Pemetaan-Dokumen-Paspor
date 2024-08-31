<?php

namespace App\Http\Controllers;

// use App\Models\dokumen;
use App\Models\dokumenwna;
use Illuminate\Http\Request;

class DokumenWnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function datawna()
    {
        $dokumenswna = DokumenWna::all();

        return view('datawna',['dokumenswna' => $dokumenswna]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function insertdokumenwna()
    {
        $result = DokumenWna::create(
            [
                'nomor_permohonan' => '3534663',
                'nomor_paspor' => 'dsud2424',
                'nomor_ktp' => '353242524',
                'nama' => 'natasha',
                'tempat_lahir' => 'pontianak',
                'tanggal_lahir' => '2003-05-18',
                'penyimpanan' => 'loketc',
                'retensi_arsip' => 'dokumen aktif',
                'tanggal_input' => '2003-05-18'
            ]
        );
        dump($result);
    }     
    public function createwna()
    {
        return view('dokumens.createwna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storewna(Request $request)
    {
        // try {
            $validatedData = $request->validate([
                'nomor_permohonan' => 'required',
                'nomor_paspor' => 'required',
                'nomor_ktp' => 'required',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'penyimpanan' => 'required',
                'retensi_arsip' => 'required|in:aktif,inaktif', // Tambahkan validasi untuk retensi_arsip
                'tanggal_input' => 'required',

            ]);
            // dump($validatedData);
            DokumenWna::create($validatedData);
            $request->session()->flash('pesan',"Penambahan data {$validatedData['nama']} berhasil");
            return redirect()->route('datawna')->with('success', 'Data berhasil ditambahkan.');
            // Gunakan metode create untuk menyimpan data
            // Dokumen::create([
            //     'nomor_permohonan' => $request->nomor_permohonan,
            //     'nomor_paspor' => $request->nomor_paspor,
            //     'nomor_ktp' => $request->nomor_ktp,
            //     'nama' => $request->nama,
            //     'tempat_lahir' => $request->tempat_lahir,
            //     'tanggal_lahir' => $request->tanggal_lahir,
            //     'penyimpanan' => $request->penyimpanan,
            //     'retensi_arsip' => $request->retensi_arsip,
            //     'tanggal_input' => $request->tanggal_input,
            // ]);
            
            // $dokumen = new dokumen();
            // $dokumen->nomor_permohonan = $validatedData['nomor_permohonan'];
            // $dokumen->nomor_paspor= $validatedData['nomor_paspor'];
            // $dokumen->nomor_ktp = $validatedData['nomor_ktp'];
            // $dokumen->nama = $validatedData['nama'];
            // $dokumen->tempat_lahir = $validatedData['tempat_lahir'];
            // $dokumen->tanggal_lahir = $validatedData['tanggal_lahir'];
            // $dokumen->penyimpanan = $validatedData['penyimpanan'];
            // $dokumen->retensi_arsip = $validatedData['retensi_arsip'];
            // $dokumen->tanggal_input = $validatedData['tanggal_input'];
            // $dokumen->save();
            // $request->session()->flash('pesan',"penambah data {$validatedData['nama']} berhasil");
            // return "Data berhasil diinputkan ke database";
        //     return redirect()->route('store')->with('success', 'Data berhasil ditambahkan.');
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    
        // }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(dokumenwna $dokumenwna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editwna(dokumenwna $dokumenwna)
    {
        // $dokumen = Dokumen::findOrFail($id);
        return view('dokumens.editwna', ['dokumenwna' => $dokumenwna]);
    }
    
    public function editwna2(dokumenwna $dokumenwna)
    {
        // $dokumen = Dokumen::findOrFail($id);
        return view('dokumens.editwna', ['dokumenwna' => $dokumenwna]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatewna(Request $request, dokumenwna $dokumenwna)
    {
        $validatedData = $request->validate([
            'nomor_permohonan' => 'required|unique:dokumenwna,nomor_permohonan,'.$dokumenwna->id,
            'nomor_paspor' => 'required',
            'nomor_ktp' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'penyimpanan' => 'required',
            'retensi_arsip' => 'required|in:aktif,inaktif', // Tambahkan validasi untuk retensi_arsip
            'tanggal_input' => 'required',

        ]);
        $dokumenwna->updatewna($validatedData);
        return redirect()->route('datawna', ['dokumenwna' => $dokumenwna->id])
        ->with('pesan', "Update data passport {$validatedData['nama']} berhasil");    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroywna(dokumenwna $dokumenwna)
    {
        $dokumenwna->delete();

        return back()->with('success','Data Berhasil di Hapus!');
    }
}