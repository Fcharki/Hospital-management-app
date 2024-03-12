<?php

namespace App\Models;
use App\Models\Maladies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['nom_patient'];
    public function maladies()
    {
        return $this->belongsToMany(Maladies::class, 'maladies_patients', 'patients_id','maladies_id');
    }
}
