<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $table = 'tools'; // Nama tabel
    protected $primaryKey = 'tool_id'; // Kolom primary key

    protected $fillable = [
        'tool_name', 'tool_code', 'description', 'quantity', 'available_quantity', 'status'
    ];

    public function borrowRequests()
    {
        return $this->hasMany(BorrowRequest::class, 'tool_id', 'tool_id');
    }

    public function borrowHistories()
    {
        return $this->hasMany(BorrowHistory::class, 'tool_id', 'tool_id');
    }

}
