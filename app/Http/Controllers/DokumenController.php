<?php

namespace App\Http\Controllers;

use App\Exports\ExportUsers;
use App\Models\dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function datawni()
    {
        $dokumens = Dokumen::all();

        return view('datawni',['dokumens' => $dokumens]);
    }

    public function cetak()
    {
        $dokumens = Dokumen::get();

        return view('dokumens.cetak',['dokumens' => $dokumens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function insertdokumen()
    {
        $result = Dokumen::create(
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
    public function create()
    {
        return view('dokumens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            Dokumen::create($validatedData);
            $request->session()->flash('pesan',"Penambahan data {$validatedData['nama']} berhasil");
            return redirect()->route('datawni')->with('success', 'Data berhasil ditambahkan.');
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
    public function show(dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dokumen $dokumen)
{
    // $dokumen = Dokumen::findOrFail($id);
    return view('dokumens.edit', ['dokumen' => $dokumen]);
}

public function edit2(dokumen $dokumen)
{
    // $dokumen = Dokumen::findOrFail($id);
    return view('dokumens.edit', ['dokumen' => $dokumen]);
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dokumen $dokumen)
    {
        $validatedData = $request->validate([
            'nomor_permohonan' => 'required|unique:dokumen,nomor_permohonan,'.$dokumen->id,
            'nomor_paspor' => 'required',
            'nomor_ktp' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'penyimpanan' => 'required',
            'retensi_arsip' => 'required|in:aktif,inaktif', // Tambahkan validasi untuk retensi_arsip
            'tanggal_input' => 'required',

        ]);
        $dokumen->update($validatedData);
        return redirect()->route('datawni', ['dokumen' => $dokumen->id])
        ->with('pesan', "Update data passport {$validatedData['nama']} berhasil");    
    }
    //     $dokumen = Dokumen::find($id);

    // if (!$dokumen) {
    //     return redirect()->route('datawni')->with('error', 'Data Dokumen tidak ditemukan.');
    // }
    
    // $dokumen->update([
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

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dokumen $dokumen)
    {
        $dokumen->delete();

        return back()->with('success','Data Berhasil di Hapus!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string',
        ]);
        $search = $request->input('search');

        $dokumens = Dokumen::where('nomor_permohonan', 'like', "%$search%")
            ->orWhere('nomor_paspor', 'like', "%$search%")
            ->orWhere('nomor_ktp', 'like', "%$search%")
            ->orWhere('nama', 'like', "%$search%")
            ->orWhere('tempat_lahir', 'like', "%$search%")
            ->orWhere('tanggal_lahir', 'like', "%$search%")
            ->orWhere('penyimpanan', 'like', "%$search%")
            ->orWhere('retensi_arsip', 'like', "%$search%")
            ->orWhere('tanggal_input', 'like', "%$search%")
            ->get();
        return view('datawni', ['dokumens' => $dokumens]);
    }

    // public function search(Request $request)
    // {
    //     if($request->has('search')){
    //         $dokumens = Dokumen::where('nomor_permohonan', 'LIKE', '%' . $request->search . '%')->get();
    //     }
    //     else {
    //         $dokumens = Dokumen::all();
    //     }

    //     return view('datawni', ['dokumens' => $dokumens]);
    // }
}