<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('data.anggota', compact('anggota'));
    }

    public function create()
    {
        return view('data.tambah_anggota');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required',
            'masa_jabatan' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        Anggota::create($request->all());
        return redirect()->route('data.index')
            ->with('success', 'Anggota created successfully.');
    }

    public function show(Anggota $anggota, $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('data.view_anggota', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('data.edit_anggota', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota, $id)
    {
        $anggota = Anggota::find($id);
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required',
            'masa_jabatan' => 'required',
            'tanggal_lahir' => 'required',
        ], [
            'nama_lengkap.required' => 'nama peminjam wajib diisi',
            'no_hp.required' => 'no hp wajib diisi',
            'jabatan.required' => 'asal mapala wajib diisi',
            'masa_jabatan.required' => 'asal mapala wajib diisi',
            'tanggal_lahir.required' => 'asal mapala wajib diisi',
        ]);

        $anggota = [
            'nama_lengkap' => $request->nama_lengkap,
            'no_hp' => $request->no_hp,
            'jabatan' => $request->jabatan,
            'masa_jabatan' => $request->masa_jabatan,
            'tanggal_lahir' => $request->tanggal_lahir,
        ];
        Anggota::where('id', $id)->update($anggota);

        return redirect()->route('data.index')->with('success', 'Berhasil mengupdate data');
    }

    public function destroy(Anggota $anggota, $id)
    {
        Anggota::where('id', $id)->delete();
        return redirect()->route('data.index')->with('success', 'Berhasil menghapus data');
    }
}
