<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    use HasFactory;
      protected $fillable = [
        'borrower_id',
        'borrower_name',
        'tool_id',
        'amount',
        'borrow_date',
        'return_date',
        'action',
    ];

    public function tool()
    {
        return $this->belongsTo(Tool::class, 'tool_id');
    }

   public function peminjamanMhs()
{
    return $this->hasOne(PeminjamanMhs::class, 'nim', 'borrower_id');
}

public function peminjamanDosen()
{
    return $this->hasOne(PeminjamanDosen::class, 'nip', 'borrower_id');
}
}
