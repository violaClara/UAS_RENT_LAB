<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tool; 

class ToolController extends Controller
{
    // Tampilkan semua data alat laboratorium
    public function index()
    {
        $tools = Tool::all(); // Ambil semua data alat
        return view('admin.home_admin', compact('tools'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('admin.tools.create');
    }

    // Simpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'tool_name' => 'required|string|max:255',
            'tool_code' => 'required|string|unique:tools,tool_code',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:available,unavailable',
        ]);

        Tool::create($request->all());

        return redirect()->route('tools.index')->with('success', 'Data alat berhasil ditambahkan.');
    }

    // Tampilkan form edit data
    public function edit($id)
    {
        $tool = Tool::findOrFail($id);
        return view('admin.tools.edit', compact('tool'));
    }

    // Update data alat di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'tool_name' => 'required|string|max:255',
            'tool_code' => "required|string|unique:tools,tool_code,$id,tool_id",
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:available,unavailable',
        ]);

        $tool = Tool::findOrFail($id);
        $tool->update($request->all());

        return redirect()->route('tools.index')->with('success', 'Data alat berhasil diperbarui.');
    }

    // Hapus data alat dari database
    public function destroy($id)
    {
        $tool = Tool::findOrFail($id);
        $tool->delete();

        return redirect()->route('tools.index')->with('success', 'Data alat berhasil dihapus.');
    }
}
