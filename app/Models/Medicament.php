<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;
    protected $table = 'medicaments';

    protected $fillable = [
        'name',
    ];
    public function consultations()
    {
        return $this->belongsToMany(Consultation::class);
    }
}
