<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\pharmacist;
use App\Models\medecine;
use App\Models\pharmacy;


class pharmacy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'location',
        'pharmacyContact',
        'pharmacyEmail',
        'medecine_id',
        'pharmacist_id',
        'pharmacyName',

    ];  
    // public function pharmacist(){
    //     return $this->belongsTo(pharmacist::class);
    // }
    // public function medecin(){
    //     return $this->belongsTo(medecine::class);
    // }
}
