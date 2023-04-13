<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyVechicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'v_make',
        'v_model',
        'v_year',
        'vin',
        'v_reg',
    ];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_company_vechicles','user_id','company_vechicle_id')->withTimestamps();
    // }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
