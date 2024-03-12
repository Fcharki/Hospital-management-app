<?php

namespace App\Models;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladies extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'maladies_patients', 'maladies_id', 'patients_id');
    }
}
