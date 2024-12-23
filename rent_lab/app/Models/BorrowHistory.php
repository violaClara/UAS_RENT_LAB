<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    use HasFactory;

    protected $table = 'borrow_histories'; // Nama tabel
    protected $primaryKey = 'history_id'; // Primary key

    protected $fillable = [
        'borrower_name', 'tool_id', 'borrow_date', 'return_date', 'amount', 'action'
    ];

    // Relasi ke tabel tools
    public function tool()
    {
        return $this->belongsTo(Tool::class, 'tool_id', 'tool_id');
    }
}
