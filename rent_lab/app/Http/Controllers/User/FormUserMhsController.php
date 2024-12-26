<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;

class FormUserMhsController extends Controller{
    public function index(Request $request)
    {
        // Fetch borrow history data with filters
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $toolId = $request->input('tool_id');
        $borrowerType = $request->input('borrower_type');

        $query = BorrowHistory::query();

        if ($startDate && $endDate) {
            $query->whereBetween('borrow_date', [$startDate, $endDate]);
        }

        if ($toolId) {
            $query->where('tool_id', $toolId);
        }

        if ($borrowerType) {
            $query->where('borrower_type', $borrowerType);
        }

        $borrowHistories = $query->orderBy('borrow_date', 'desc')->get();

        // Fetch all tools
        $tools = Tool::all();

        // Pass both borrowHistories and tools data to the view
        return view('user.user_form_mhs', compact('borrowHistories', 'tools'));
    }
}
?>