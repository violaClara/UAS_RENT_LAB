<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRequest extends Model
{
    use HasFactory;

    protected $table = 'borrow_requests'; // Nama tabel
    protected $primaryKey = 'request_id'; // Primary key

    protected $fillable = [
        'borrower_name', 'contact', 'tool_id', 'borrow_date', 'return_date', 'amount', 'status'
    ];

    // Relasi ke tabel tools
    public function tool()
    {
        return $this->belongsTo(Tool::class, 'tool_id', 'tool_id');
    }
}
