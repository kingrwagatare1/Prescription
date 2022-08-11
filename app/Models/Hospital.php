<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Doctor;

class Hospital extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'hospitals';
    protected $primaryKey = 'hospital_id';
    public $incrementing = false;
    protected $fillable = [
        'hospital_id',
        'hospitalName',
        'hospitalAddress',

    ];

    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class);
    // }
}
