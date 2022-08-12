<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //protected $table = 'doctors';
    protected $primaryKey = 'doctor_id';
    protected $fillable = [
        'doctorName',
        'address',
        'speciality',
        'doctorContact',
        'hospital_id',
        'DOB',
        'email',
        'username',
        'password',

    ];
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

    // public function hospitals()
    // {
    //     return $this->hasMany(Hospital::class);
    // }
}
