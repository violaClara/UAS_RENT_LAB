<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowFormController extends Controller
{
    // Menampilkan form peminjaman
    public function create()
    {
        // Ambil semua alat untuk dropdown search
        $tools = Tool::all();

        return view('borrow_form', compact('tools'));
    }

    // Menyimpan data peminjaman
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'borrower_name' => 'required|string|max:255',
            'borrower_type' => 'required|in:Mahasiswa,Dosen',
            'borrower_id' => 'required|string|max:50',
            'contact' => 'required|string|max:50',
            'tool_id' => 'required|exists:tools,tool_id',
            'amount' => 'required|integer|min:1',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:borrow_date',
        ]);

        // Simpan data peminjaman
        BorrowHistory::create([
            'borrower_name' => $request->input('borrower_name'),
            'borrower_type' => $request->input('borrower_type'),
            'borrower_id' => $request->input('borrower_id'),
            'contact' => $request->input('contact'),
            'tool_id' => $request->input('tool_id'),
            'amount' => $request->input('amount'),
            'borrow_date' => $request->input('borrow_date'),
            'return_date' => $request->input('return_date'),
            'action' => 'pending', // default status
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data peminjaman berhasil disimpan!');
    }
}
