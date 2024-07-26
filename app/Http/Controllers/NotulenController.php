<?php

namespace App\Http\Controllers;

use App\Models\Notulen;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Storage;

class NotulenController extends Controller
{
        // $data = notulen::paginate(5);
    public function index(Request $request)
    {
        $notulen = Notulen::orderBy('tanggal', 'desc')->get();
         // Debugging: tampilkan hasil query
    dd($notulen);
        return view('notulen.index', compact('notulen'));
    }
        // return view('notulen.index');

    public function create()
    {
        return view('notulen.create');
    }

    public function show($id)
    {
        $notulen = Notulen::findOrFail($id);
        return view('notulen.view', compact('notulen'));
    }

    public function store(Request $request)
    {
        session()->put('judul', $request->judul);
        session()->put('tanggal', $request->tanggal);
        session()->put('ttd', $request->ttd);
        session()->put('keterangan', $request->isi);

        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
            // 'file' => 'required|file|mimes:pdf|max:2048',
        ], [
            'judul.required' => 'nama peminjam wajib diisi',
            'tanggal.required' => 'no hp wajib diisi',
            'ttd.required' => 'ttd wajib diisi',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);

        // $filePath = $request->file('file')->store('public/notulensi');

        $data = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'ttd' => $request->ttd,
            'keterangan' => $request->keterangan,
            // 'file' => basename($filePath),
        ];
        notulen::create($data);

        return redirect()->route('notulen.index')->with('success', 'Berhasil menambahkan data');
    }
    
    public function edit($id)
    {
        $notulen = notulen::find($id);
        return view('notulen.edit', compact('notulen'));
    }

    public function update(Request $request, $id, Notulen $notulen)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
        ], [
            'judul.required' => 'nama peminjam wajib diisi',
            'tanggal.required' => 'no hp wajib diisi',
            'ttd.required' => 'asal mapala wajib diisi',
            'keterangan.required' => 'asal mapala wajib diisi',
        ]);

        $notulen = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'ttd' => $request->ttd,
            'keterangan' => $request->keterangan,
        ];
        notulen::where('id', $id)->update($notulen);

        return redirect()->to('notulen')->with('success', 'Berhasil mengupdate data');
    }

    public function destroy($id)
    {
        notulen::where('id', $id)->delete();
        return redirect()->to('notulen')->with('success', 'Berhasil menghapus data');
    }

    public function pdf($id)
    {
        $notulen = Notulen::findOrFail($id);
        return view('notulen.show', compact('notulen'));
    }

    public function downloadPdf($id)
    {
        $notulen = Notulen::findOrFail($id);
        $pdf = FacadePdf::loadView('notulen.pdf', compact('notulen'));
        return $pdf->download('notulensi_' . $notulen->judul . '.pdf');
    }

    // public function shareToWhatsApp($id)
    // {
    //     $notulen = Notulen::findOrFail($id);

    //     $pdfPath = storage_path('app/public/meeting_minute_' . $notulen->id . '.pdf');
    //     $pdfUrl = url('storage/meeting_minute_' . $notulen->id . '.pdf');

    //     $whatsappUrl = "https://api.whatsapp.com/send?text=" . urlencode("Here is the meeting minute: " . $pdfUrl);

    //     return redirect($whatsappUrl);
    // }

    public function generatePdf($id)
    {
        $notulen = Notulen::findOrFail($id);
        $pdf = FacadePdf::loadView('notulen.pdf', compact('notulen'));
        
        // Menyimpan PDF ke storage
        $filePath = 'public/notulensi/notulensi_rapat_' . $notulen->judul . '.pdf';
        Storage::put($filePath, $pdf->output());

        return $filePath;
    }

    public function sendViaWhatsapp($id)
    {
        $filePath = $this->generatePdf($id);
        $fileUrl = Storage::url($filePath);

        // URL WhatsApp API untuk mengirim pesan
        $whatsappApiUrl = 'https://api.whatsapp.com/send?phone=+6282136352399&text=Here%20is%20the%20PDF%20file:%20' . urlencode($fileUrl);

        return redirect()->away($whatsappApiUrl);
    }
}
