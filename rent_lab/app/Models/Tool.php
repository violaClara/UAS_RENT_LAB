<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
   

    protected $fillable = [
        'tool_name', 
        'description', 
        'quantity', 
        'available_quantity', 
        'status'
    ];

    public function borrowHistories()
    {
        return $this->hasMany(BorrowHistory::class, 'tool_id');
    }
}
