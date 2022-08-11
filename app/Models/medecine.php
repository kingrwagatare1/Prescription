<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pharmacy;
class medecine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   
    protected $fillable = [
        'medecine_id',
        'medecineName',
        'pharmacy_id',
    ];
    public function medecines(){
        return $this->belongsTo(medecine::class);
    }
   
}
