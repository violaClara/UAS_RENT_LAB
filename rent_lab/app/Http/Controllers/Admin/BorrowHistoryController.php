<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BorrowHistory;



class BorrowHistoryController extends Controller
{
    // Menampilkan riwayat peminjaman dengan fitur filter
    public function index(Request $request)
    {
        // Ambil data filter dari request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $toolId = $request->input('tool_id');
        $borrowerType = $request->input('borrower_type');

        // Query dasar untuk riwayat peminjaman
        $query = BorrowHistory::query();

        // Filter berdasarkan tanggal
        if ($startDate && $endDate) {
            $query->whereBetween('borrow_date', [$startDate, $endDate]);
        }

        // Filter berdasarkan alat
        if ($toolId) {
            $query->where('tool_id', $toolId);
        }

        // Filter berdasarkan jenis peminjam
        if ($borrowerType) {
            $query->where('borrower_type', $borrowerType);
        }

        // Eksekusi query
        $borrowHistories = $query->orderBy('borrow_date', 'desc')->get();
        // Pass data to the home_admin view
        return view('admin.home_admin', compact('borrowHistories'));
        
    }
}
