<?php

namespace App\Http\Controllers;

use App\Models\Pengirim;
use Illuminate\Http\Request;

class PengirimController extends Controller
{
    public function index()
    {
        $pengirim = Pengirim::orderBy('created_at', 'DESC')->get();

        return view('pengirim.index', compact('pengirim'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengirim.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengirim' => 'required|min:0',
            'no_hp' => 'required|numeric|min:0',
            'alamat' => 'required|min:0',
        ]);

        pengirim::create([
            'pengirim'     => $request->pengirim,
            'no_hp'   => $request->no_hp,
            'alamat'   => $request->alamat,
        ]);

        return redirect()->route('pengirim.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengirim = Pengirim::findOrFail($id);

        return view('pengirim.show', compact('pengirim'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengirim = Pengirim::findOrFail($id);

        return view('pengirim.edit', compact('pengirim'));
    }

    public function update(Request $request, string $id)
    {
        $pengirim = Pengirim::findOrFail($id);
        $request->validate([
            'pengirim' => 'required|min:0',
            'no_hp' => 'required|numeric|min:0',
            'alamat' => 'required|min:0',
        ]);
        $pengirim->update($request->all());

        return redirect()->route('pengirim.index')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengirim = Pengirim::findOrFail($id);

        $pengirim->delete();

        return redirect()->route('pengirim.index')->with('success', 'Data berhasil dihapus');
    }
}
