<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;

class PeminjamanAdminController extends Controller{
   public function index(Request $request)
    {
        // Filter data peminjaman
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $toolId = $request->input('tool_id');

        $query = BorrowHistory::with(['tool', 'peminjamanMhs']);

        if ($startDate && $endDate) {
            $query->whereBetween('borrow_date', [$startDate, $endDate]);
        }

        if ($toolId) {
            $query->where('tool_id', $toolId);
        }

        $borrowHistories = $query->orderBy('borrow_date', 'desc')->paginate(10);

        // Mengambil data semua alat
        $tools = Tool::all();

        return view('admin.admin_peminjaman', compact('borrowHistories', 'tools'));
    }

    public function approve($id)
    {
        $borrowHistory = BorrowHistory::findOrFail($id);
        $borrowHistory->update(['action' => 'approved']);

        return redirect()->back()->with('success', 'Peminjaman telah disetujui.');
    }

    public function reject($id)
    {
        $borrowHistory = BorrowHistory::findOrFail($id);
        $borrowHistory->update(['action' => 'rejected']);

        return redirect()->back()->with('success', 'Peminjaman telah ditolak.');
    }

    public function updateReturnDate(Request $request, $id)
{
    // Validasi input tanggal
    $request->validate([
        'return_date' => 'required|date|after_or_equal:today',
    ]);

    // Cari data BorrowHistory berdasarkan ID
    $borrowHistory = BorrowHistory::findOrFail($id);

    // Update tanggal pengembalian
    $borrowHistory->update([
        'return_date' => $request->input('return_date'),
    ]);

    return redirect()->back()->with('success', 'Tanggal pengembalian berhasil diperbarui.');
}
}
?>