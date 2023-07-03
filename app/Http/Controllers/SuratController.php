<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surat = Surat::orderBy('created_at', 'DESC')->get();

        return view('surat.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('surat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|numeric|min:0',
            'pengirim' => 'required|min:0',
            'penerima' => 'required|min:0',
            'isi_surat' => 'required|min:0',
            'kategori' => 'required|min:0'
        ]);

        Surat::create([
            'nomor_surat'=> $request->nomor_surat,
            'pengirim'     => $request->pengirim,
            'penerima'   => $request->penerima,
            'isi_surat'   => $request->isi_surat,
            'kategori'   => $request->kategori,
        ]);

        return redirect()->route('surat.index')->with('success', 'Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $surat = Surat::findOrFail($id);

        return view('surat.show', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $surat = Surat::findOrFail($id);

        return view('surat.edit', compact('surat'));
    }

    public function update(Request $request, string $id)
    {
        $surat = Surat::findOrFail($id);
        $request->validate([
            'nomor_surat' => 'required|numeric|min:0',
            'pengirim' => 'required|min:0',
            'penerima' => 'required|min:0',
            'isi_surat' => 'required|min:0',
            'kategori' => 'required|min:0'
        ]);
        $surat->update($request->all());

        return redirect()->route('surat.index')->with('success', 'Produk berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surat = Surat::findOrFail($id);

        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Produk berhasil dihapus');
    }
}
