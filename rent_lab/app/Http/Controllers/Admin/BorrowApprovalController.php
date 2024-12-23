<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorrowApprovalController extends Controller
{
    // Tampilkan semua data peminjaman untuk disetujui atau ditolak
    public function index()
    {
        $borrowRequests = BorrowHistory::where('action', 'pending')->get();

        return view('admin.borrow_approval.index', compact('borrowRequests'));
    }

    // Menyetujui permintaan peminjaman
    public function approve($id)
    {
        $borrow = BorrowHistory::findOrFail($id);
        $borrow->action = 'approved';
        $borrow->save();

        return redirect()->route('admin.borrow_approval.index')
            ->with('success', 'Permintaan peminjaman telah disetujui.');
    }

    // Menolak permintaan peminjaman
    public function reject($id)
    {
        $borrow = BorrowHistory::findOrFail($id);
        $borrow->action = 'rejected';
        $borrow->save();

        return redirect()->route('admin.borrow_approval.index')
            ->with('error', 'Permintaan peminjaman telah ditolak.');
    }
}
