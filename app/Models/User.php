<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',

        'id','is_auth','c_name','c_address','c_email','c_phone','p_name','p_phone','p_email','p_position','username','password',
        'name','phone','email','city','username','password',
    ];
    // public function company_vechicles()
    // {
    //     return $this->belongsTo(CompanyVechicle::class, 'user_company_vechicles','user_id','company_vechicle_id')->withTimestamps();
    // }
    public function vechicles()
    {
        return $this->hasMany(CompanyVechicle::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
   
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
