<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller{
 public function index(Request $request)
    {
        // Query statistics data
        $statistics = DB::select(" 
            SELECT 
                YEAR(borrow_date) AS year, 
                MONTH(borrow_date) AS month, 
                COUNT(*) AS total, 
                CASE 
                    WHEN borrower_id IN (SELECT nim FROM peminjaman_mhs) THEN 'Mahasiswa'
                    WHEN borrower_id IN (SELECT nip FROM peminjaman_dosens) THEN 'Dosen'
                    ELSE 'Staff'
                END AS borrower_type
            FROM borrow_histories
            GROUP BY year, month, borrower_type
            ORDER BY year ASC, month ASC
        ");
        
        // Process statistics data into a more usable format
        $data = [
            'labels' => [],
            'datasets' => []
        ];

        // Group data by borrower type and month
        foreach ($statistics as $stat) {
            $yearMonth = $stat->year . '-' . str_pad($stat->month, 2, '0', STR_PAD_LEFT); // Format for month-year
            if (!in_array($yearMonth, $data['labels'])) {
                $data['labels'][] = $yearMonth;
            }

            // Check if the borrower type already exists in datasets
            $typeIndex = array_search($stat->borrower_type, array_column($data['datasets'], 'label'));
            if ($typeIndex === false) {
                $data['datasets'][] = [
                    'label' => $stat->borrower_type,
                    'data' => array_fill(0, count($data['labels']), 0),
                    'backgroundColor' => $this->getColorForType($stat->borrower_type),
                    'borderColor' => $this->getBorderColorForType($stat->borrower_type), // Optional: border color for better visualization
                    'borderWidth' => 1,
                ];
                $typeIndex = count($data['datasets']) - 1;
            }

            // Find the index of the year-month label and update the dataset
            $monthIndex = array_search($yearMonth, $data['labels']);
            $data['datasets'][$typeIndex]['data'][$monthIndex] = $stat->total;
        }

        // Log the processed data for debugging
        \Log::info($data);

        // Pass the data to the view
        return view('user.user_home', compact('data'));
    }

    // Helper function to get color for each borrower type
    private function getColorForType($type)
    {
        switch ($type) {
            case 'Mahasiswa':
                return 'rgba(255, 99, 132, 0.6)'; // Red
            case 'Dosen':
                return 'rgba(54, 162, 235, 0.6)'; // Blue
            case 'Staff':
                return 'rgba(75, 192, 192, 0.6)'; // Green
            default:
                return 'rgba(153, 102, 255, 0.6)'; // Purple
        }
    }

    // Optional: Helper function to get border color for better chart visibility
    private function getBorderColorForType($type)
    {
        switch ($type) {
            case 'Mahasiswa':
                return 'rgba(255, 99, 132, 1)';
            case 'Dosen':
                return 'rgba(54, 162, 235, 1)';
            case 'Staff':
                return 'rgba(75, 192, 192, 1)';
            default:
                return 'rgba(153, 102, 255, 1)';
        }
    }
}
?>