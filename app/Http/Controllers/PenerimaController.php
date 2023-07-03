<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerima = Penerima::orderBy('created_at', 'DESC')->get();

        return view('penerima.index', compact('penerima'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penerima' => 'required|min:0',
            'no_hp' => 'required|numeric|min:0',
            'alamat' => 'required|min:0',
        ]);

        penerima::create([
            'penerima'     => $request->penerima,
            'no_hp'   => $request->no_hp,
            'alamat'   => $request->alamat,
        ]);

        return redirect()->route('penerima.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penerima = Penerima::findOrFail($id);

        return view('penerima.show', compact('penerima'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penerima = penerima::findOrFail($id);

        return view('penerima.edit', compact('penerima'));
    }

    public function update(Request $request, string $id)
    {
        $penerima = penerima::findOrFail($id);
        $request->validate([
            'penerima' => 'required|min:0',
            'no_hp' => 'required|numeric|min:0',
            'alamat' => 'required|min:0',
        ]);
        $penerima->update($request->all());

        return redirect()->route('penerima.index')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengirim = Penerima::findOrFail($id);

        $pengirim->delete();

        return redirect()->route('pengirim.index')->with('success', 'Data berhasil dihapus');
    }
}
