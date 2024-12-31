<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\PeminjamanDosen;
use App\Models\BorrowHistory;

class FormUserDosenController extends Controller{
   public function index(Request $request)
    {
        // Filter data peminjaman berdasarkan input pengguna
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $alat = $request->input('alat');
        $status = $request->input('status');

        $query = PeminjamanDosen::query();

        // Filter berdasarkan tanggal
        if ($startDate && $endDate) {
            $query->whereBetween('tanggal_peminjaman', [$startDate, $endDate]);
        }

        // Filter berdasarkan alat
        if ($alat) {
            $query->where('alat', $alat);
        }

        // Filter berdasarkan status peminjam
        if ($status) {
            $query->where('status', $status);
        }

        // Ambil data peminjaman
        $borrowHistories = $query->orderBy('tanggal_peminjaman', 'desc')->get();
 // Ambil daftar alat unik dari tabel Tool
    $tools = Tool::select('tool_name')->distinct()->get();

        // Kirim data ke view
        return view('user.user_form_dosen', compact('borrowHistories', 'tools'));
    }

    // Method untuk menyimpan data peminjaman
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari form
        $validated = $request->validate([
            'status' => 'required|string',
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'notelp' => 'required|numeric',
            'alat' => 'required|string',
            'jumlahAlat' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        // Simpan data ke tabel PeminjamanDosen
        $peminjaman = PeminjamanDosen::create([
            'status' => $validated['status'],
            'nama' => $validated['nama'],
            'nip' => $validated['nip'],
            'email' => $validated['email'],
            'notelp' => $validated['notelp'],
            'alat' => $validated['alat'],
            'jumlah_alat' => $validated['jumlahAlat'],
            'tanggal_peminjaman' => $validated['tanggal'],
        ]);

   
    // Dapatkan alat berdasarkan nama
    $tool = Tool::where('tool_name', $validated['alat'])->first();

        // Simpan data ke BorrowHistory
        if ($tool) {
            BorrowHistory::create([
                'borrower_id' => $validated['nip'], // NIP dosen sebagai borrower_id
                'borrower_name' => $validated['nama'],
                'tool_id' => $tool->id,
                'amount' => $validated['jumlahAlat'],
                'borrow_date' => $validated['tanggal'],
                'return_date' => null, // Set null atau bisa disesuaikan
                'action' => 'pending', // Default action
                'status' => $validated['status'], // Tambahkan ini
            ]);
        }

        // Redirect dengan status berhasil
        return redirect()->route('form_user_dosen')->with('form_valid', true);
    }
}
?>