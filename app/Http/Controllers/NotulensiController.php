<?php

namespace App\Http\Controllers;

use App\Models\Notulensi;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class NotulensiController extends Controller
{
    public function index()
    {
        // $data = Notulensi::paginate(5);
        return view('notulensi.index');
        // return view('notulensi.index', compact('data'));
    }

    public function create()
    {
        return view('notulensi.create');
    }

    public function view()
    {
        return view('notulensi.view');
    }

    public function store(Request $request)
    {
        session()->put('judul', $request->judul);
        session()->put('tanggal', $request->tanggal);
        session()->put('ttd', $request->ttd);
        session()->put('isi', $request->isi);

        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'ttd' => 'required',
            'isi' => 'isi',
        ], [
            'judul.required' => 'nama peminjam wajib diisi',
            'tanggal.required' => 'no hp wajib diisi',
            'ttd.required' => 'asal mapala wajib diisi',
            'isi.required' => 'asal mapala wajib diisi',
        ]);

        $data = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'ttd' => $request->ttd,
            'isi' => $request->isi,
        ];
        Notulensi::create($data);

        return redirect()->to('notulensi')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $data = Notulensi::find($id);
        return view('notulensi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'ttd' => 'required',
            'isi' => 'isi',
        ], [
            'judul.required' => 'nama peminjam wajib diisi',
            'tanggal.required' => 'no hp wajib diisi',
            'ttd.required' => 'asal mapala wajib diisi',
            'isi.required' => 'asal mapala wajib diisi',
        ]);

        $data = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'ttd' => $request->ttd,
            'isi' => $request->isi,
        ];
        Notulensi::where('id', $id)->update($data);

        return redirect()->to('notulensi')->with('success', 'Berhasil mengupdate data');
    }

    public function destroy($id)
    {
        Notulensi::where('id', $id)->delete();
        return redirect()->to('notulensi')->with('success', 'Berhasil menghapus data');
    }
}
