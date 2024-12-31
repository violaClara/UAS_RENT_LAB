<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;

class InventarisAdminController extends Controller{
      public function index()
    {
        // Fetch all tools and paginate
        $tools = Tool::paginate(5);
        return view('admin.admin_inventaris', compact('tools'));
    }

    public function store(Request $request)
{
    $request->validate([
        'tool_name' => 'required|string|max:255',
        'description' => 'required|string',
        'quantity' => 'required|integer',
        'available_quantity' => 'required|integer',
        'status' => 'required|string|in:available,unavailable',
    ]);

    Tool::create([
        'tool_name' => $request->tool_name,
        'description' => $request->description,
        'quantity' => $request->quantity,
        'available_quantity' => $request->available_quantity,
        'status' => $request->status,
    ]);

    return redirect()->route('admin_inventaris')->with('success', 'Tool added successfully!');
}


  public function edit($id)
{
    $tool = Tool::findOrFail($id);
    $tools = Tool::paginate(5); // Assuming you want to show all tools along with the one you're editing
    return view('admin.admin_inventaris', compact('tool', 'tools'));
}

public function update(Request $request, $id)
{
    $tool = Tool::findOrFail($id);

    $request->validate([
        'tool_name' => 'required|string|max:255',
        'description' => 'required|string',
        'quantity' => 'required|integer',
        'available_quantity' => 'required|integer',
        'status' => 'required|string|in:available,unavailable',
    ]);

    $tool->update([
        'tool_name' => $request->tool_name,
        'description' => $request->description,
        'quantity' => $request->quantity,
        'available_quantity' => $request->available_quantity,
        'status' => $request->status,
    ]);

    return redirect()->route('admin_inventaris')->with('success', 'Tool updated successfully!');
}


    public function destroy($id)
{
    $tool = Tool::findOrFail($id); // Cari tool berdasarkan ID
    $tool->delete(); // Hapus tool

    return redirect()->route('admin_inventaris')->with('success', 'Data berhasil dihapus!');
}
}
?>