<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\insurance;
use App\Models\doctor;
use App\Models\Hospital;
use App\Models\pharmacy;
use App\Models\Patient;

class Prescription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table =  'prescriptions';
    protected $fillable = [
        'insurance_id',
        'patient_id',
        'details',
        'doctor_id',
        'doctorContact',
        'speciality',
        'hospital_id',
        'status',
        'pharmacy_id',


    ];

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
    // public function insurance(){

    //     return $this->belongsTo(insurance::class);
    // }
    // public function doctor(){

    //     return $this->hasMany(doctor::class);
    // }
    // public function hospital(){

    //     return $this->hasMany(Hospital::class);
    // }
    // public function pharmacie(){

    //     return $this->hasMany(pharmacy::class);
    // }
    // public function patient(){

    //     return $this->hasMany(Patient::class);
    // }
}
