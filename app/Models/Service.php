<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'r_date',
        'r_type',
        'r_cost',
        
        'm_date',
        'm_type',
        'm_cost',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
